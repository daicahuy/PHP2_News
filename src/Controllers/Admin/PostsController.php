<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\Category;
use Assignment\Php2News\Models\Post;
use Assignment\Php2News\Models\Type;

class PostsController extends Controller
{
    private string $folder = 'pages.posts.';
    private Post $post;
    public function __construct()
    {
        $this->post = new Post();
    }
    // Posts List
    public function list($status = 1)
    {
        $cates = new Category();
        $cate = $cates->getAll('*');

        $data = $this->post->getAll($status, 'p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
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

            // Helper::debug($_POST);
            $this->post->addPost(
                [
                    'title' => $_POST['title'],
                    'idCategory' => $_POST['idCategory'],
                    'idType' => $_POST['idType'],
                ]
            );
        }

        // $title = $_POST['title'];
        // $content = $_POST['content'];
        // $categoryId = $_POST['category_id'];
        // $typeId = $_POST['type_id'];
        // $add= ;
        // [
        //     'title' => $title,
        //     'categoryId' => $categoryId,
        //     'type' => $typeId
        // ]


        // lấy dữ liệu category
        $cates = new Category();
        $cate = $cates->getAll('*');

        // lấy dữ liệu type
        $types = new Type();
        $type = $types->getAll('*');
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'cate' => $cate,
            'type' => $type
        ]);
    }

    // Posts Detail luminate\Http\Request
    public function detail($id)
    {
        $cates = new Category();
        $cate = $cates->getAll('*');

        // $detailPost = new Post();
        $data = $this->post->getById($id, 'p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 'c.id idCategory', 't.name typeName', 't.id idType');   // lưu ý thứ tự truyền vào tham số

        $types = new Type();
        $type = $types->getAll('*');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
        // Helper::debug($cate);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'data' => $data,
            'cate' => $cate,
            'type' => $type
        ]);
    }

    // Posts Edit
    public function edit($id)
    {
        // lấy dữ liệu category
        $cates = new Category();
        $cate = $cates->getAll('*');
        // lấy dữ liệu chi tiết
        $data = $this->post->getById($id, 'p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 'c.id idCategory', 't.name typeName', 't.id idType');   // lưu ý thứ tự truyền vào tham số

        // lấy dữ liệu type
        $types = new Type();
        $type = $types->getAll('*');
        // Helper::debug($data);

        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
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

        $data = $this->post->getAll($status, 'p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $status;
        // die;

        return $this->renderViewAdmin($this->folder . 'list-hide', [
            'cate' => $cate,
            'data' => $data
        ]);
    }
}
