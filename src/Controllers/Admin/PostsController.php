<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\Category;
use Assignment\Php2News\Models\Posts;
use Assignment\Php2News\Models\Type;
use Assignment\Php2News\Models\User;
use Rakit\Validation\Validator;

class PostsController extends Controller
{
    private string $folder = 'pages.posts.';
    private Posts $post;
    public function __construct()
    {
        $this->post = new Posts();
    }
    // Posts List
    public function list($status = 1)
    {
        session_destroy();

        $cates = new Category();
        $cate = $cates->getAll('*');

        $data = $this->post->getAll($status, 'p.id', 'p.title', 'image', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        // Helper::debug($data);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'cate' => $cate,
            'data' => $data
        ]);
    }

    // Posts Add  
    public function add()
    {

        if (isset($_POST['btn-add'])) {
            //   Helper::debug($_POST);


            // Validato
            $validator = new Validator();
            $validation = $validator->make($_POST + $_FILES, [
                'title'         => 'required|min:3', // Tối thiểu 3 kí tự
                'content'       => 'required|min:10', // Tối thiểu 10
                'image'         => 'required|uploaded_file:0,2048K,png,jpeg,jpg', //tệp tải lên, max 2MB,....
                'idAuthor'      => 'numeric', // phải là số
                'idCategory'    => 'numeric',
                'idType'        => 'numeric',
            ]);
            $validation->validate();
            if ($validation->fails()) {
                $_SESSION['notify']['danger'] = $validation->errors()->firstOfAll();
                // Helper::debug(firstOfAll());

                // header("Location: /admin/posts/add");
                // exit;
            } else {
                $data = [
                    'title'        =>  $_POST['title'],
                    'content'      =>  $_POST['content'],
                    'idAuthor'     =>  $_POST['idAuthor'],
                    'idCategory'   =>  $_POST['idCategory'],
                    'idType'       =>  $_POST['idType'],
                    'status'       => 1,
                    'dateChange' => date('Y-m-d H:i:s', time())
                ];
                if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                    $from = $_FILES['image']['tmp_name'];
                    $to = 'uploads/users/' . uniqid() . time() . $_FILES['image']['name'];

                    if (move_uploaded_file($from, PATH_ASSET . $to)) {
                        $data['image'] = $to;
                    }
                }
                // $_SESSION['notify']['danger'][] = 'Lỗi upload file image';

                // header("Location: /admin/posts/add");
                // die;
                if ($this->post->addPost($data)) {
                    $_SESSION['notify']['success'][] = 'Update successful';
                }




                // if ($post['image'] && file_exists(PATH_ASSET . $post['image'])) {
                //     unlink(PATH_ASSET . $post['image']);
                // }
                // $_SESSION['status'] = true;
                // $_SESSION['msg'] = 'Thao tác thành công!';



                // header("Location: /admin/posts/add");
                // die;
            }
        }
        $users = new User();
        $user = $users->getByStatus([2], ['id', 'name']);

        // lấy dữ liệu category
        $cates = new Category();
        $cate  = $cates->getAll('*');

        // lấy dữ liệu type
        $types = new Type();
        $type  = $types->getAll('*');
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'cate' => $cate,
            'type' => $type,
            'user' => $user,
        ]);
    }

    // Posts Detail luminate\Http\Request
    public function detail($id)
    {
        //User
        $users = new User();
        $user = $users->getByStatus([2], ['id', 'name']);

        //Category
        $cates = new Category();
        $cate = $cates->getAll('*');

        // $detailPost = new Post();
        $data = $this->post->getById($id, 'p.id', 'p.title', 'image', 'idAuthor', 'p.content', 'u.name userName', 'c.nameCategory', 'c.id idCategory', 't.name typeName', 't.id idType');   // lưu ý thứ tự truyền vào tham số

        $types = new Type();
        $type = $types->getAll('*');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
        // Helper::debug($data);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'user' => $user,
            'data' => $data,
            'cate' => $cate,
            'type' => $type
        ]);
    }

    // Posts Edit
    public function edit($id)
    {

        // $post = $this->post->getById($id,'p.*');
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] ==  'POST') {
            // Helper::debug($_POST);
            // Validato
            $validator = new Validator();
            $validation = $validator->make($_POST + $_FILES, [
                'title'         => 'required|min:3', // Tối thiểu 3 kí tự
                'content'       => 'required|min:10', // Tối thiểu 10
                'image'         => 'uploaded_file:0,2048K,png,jpeg,jpg', //tệp tải lên, max 2MB,....
                'idAuthor'      => 'numeric', // phải là số
                'idCategory'    => 'numeric',
                'idType'        => 'numeric',
            ]);
            $validation->validate();
            if ($validation->fails()) {
                $_SESSION['errors'] = $validation->errors()->firstOfAll();
                header("Location: /admin/posts/edit/$id");
                exit;
            } else {
                $data = [
                    'title'        =>  $_POST['title'],
                    'content'      =>  $_POST['content'],
                    'idAuthor'     =>  $_POST['idAuthor'],
                    'idCategory'   =>  $_POST['idCategory'],
                    'idType'       =>  $_POST['idType'],
                    'status'       => 1,
                    'dateChange' => date('Y-m-d H:i:s', time())

                ];
                if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                    $from = $_FILES['image']['tmp_name'];
                    $to = 'uploads/users/' . uniqid() . time() . $_FILES['image']['name'];

                    if (move_uploaded_file($from, PATH_ASSET . $to)) {
                        $data['image'] = $to;
                    } else {
                        $_SESSION['errors']['avatar'] = 'Lỗi upload file image';

                        header("Location: /admin/posts/edit/$id");
                    }
                }
                $this->post->update($id, $data);
                // if ($post['image'] && file_exists(PATH_ASSET . $post['image'])) {
                //     unlink(PATH_ASSET . $post['image']);
                // }
                $_SESSION['status'] = true;
                $_SESSION['msg'] = 'Thao tác thành công!';

                // $_SESSION['errors'] = 'Update successful';

                header("Location: /admin/posts/edit/$id");
                die;
            }
        }
        //user
        $users = new User();
        $user = $users->getByStatus([2], ['id', 'name']);
        // lấy dữ liệu category
        $cates = new Category();
        $cate = $cates->getAll('*');
        // lấy dữ liệu chi tiết
        $data = $this->post->getById($id, 'p.id', 'p.title', 'image', 'idAuthor', 'p.content', 'u.name userName', 'c.nameCategory', 'c.id idCategory', 't.name typeName', 't.id idType');   // lưu ý thứ tự truyền vào tham số

        // lấy dữ liệu type
        $types = new Type();
        $type = $types->getAll('*');
        // Helper::debug($data);

        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'user' => $user,
            'cate' => $cate,
            'type' => $type,
            'data' => $data
        ]);
    }

    // Posts Hiden
    public function hide($id)
    {
        // $hide = new Post();
        try {
            $this->post->update(
                $id,
                [
                    'status' => '0',
                    'dateChange' => date('Y-m-d H:i:s', time())
                ]
            );
            $_SESSION['notify']['success'][] = 'Successfully hidden';
        } catch (\Throwable $e) {
            $_SESSION['notify']['danger'][] = $e->getMessage();
        }

        // Helper::debug($data1);
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;

        header('Location: /admin/posts');
        die;
    }

    // Posts Show
    public function show($id)
    {
        try {
            $this->post->update(
                $id,
                [
                    'status' => '1',
                    'dateChange' => date('Y-m-d H:i:s', time())
                ]
            );
            $_SESSION['notify']['success'][] = 'Displayed successfully';
        } catch (\Throwable $th) {
            $_SESSION['notify']['danger'][] = $th->getMessage();
        }


        header('Location: /admin/posts/list-hide');
        die;
    }

    // Posts Delete
    public function delete($id)
    {
        try {
            $this->post->deletePost($id);
            $_SESSION['notify']['success'][] = 'Deleted successfully';
        } catch (\Throwable $th) {
            $_SESSION['notify']['danger'][] = $th->getMessage();
        }


        header('Location: /admin/posts/list-hide');
        die;
        // DELETE code...
    }

    // Posts List Hiden
    public function listHide($status = 0)
    {

        $cates = new Category();
        $cate = $cates->getAll('*');

        $data = $this->post->getAll($status, 'p.id', 'p.title', 'image', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $status;
        // die;

        return $this->renderViewAdmin($this->folder . 'list-hide', [
            'cate' => $cate,
            'data' => $data
        ]);
    }
}
