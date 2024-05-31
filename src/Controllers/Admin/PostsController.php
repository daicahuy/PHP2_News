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
    public function list()
    {

        $data = $this->post->getAll('p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');

        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['data' => $data]);
    }

    // Posts Add
    public function add()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Detail
    public function detail($id)
    {

        $cate = $this->post->getAll('*');

        $detailPost = new Post();
        $data = $detailPost->getById($id, 'p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 'c.id idCategory', 't.name typeName', 't.id idType');   // lưu ý thứ tự truyền vào tham số

        $types = new Type();
        $type = $types->getAll('*');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
        // Helper::debug($data);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, [
            'data' => $data,
            'cate' => $cate,
            'type' => $type
        ]);
    }

    // Posts Edit
    public function edit()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Hiden
    public function hide($id)
    {
        // $hide = new Post();
        $this->post->hidden($id, ['status' => '0']);
        // Helper::debug($data1);
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;

        $data = $this->post->getAll('p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        return $this->renderViewAdmin($this->folder . 'list', ['data' => $data]);
    }

    // Posts Show
    public function show($id)
    {
        // SHOW code...
        $this->post->showPost($id, ['status' => '1']);

        $data = $this->post->getAll('p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        return $this->renderViewAdmin($this->folder . 'list', ['data' => $data]);
    }

    // Posts Delete
    public function delete($id)
    {
        $this->post->deletePost($id);
        $data = $this->post->getAllHeide('p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        return $this->renderViewAdmin($this->folder . 'list', ['data' => $data]);
        // DELETE code...
    }

    // Posts List Hiden
    public function listHide()
    {

        // Helper::debug($status);
        // $list = $this->post->getAll();
        $data = $this->post->getAllHeide('p.id', 'p.title', 'p.content', 'u.name userName', 'c.nameCategory', 't.name typeName');
        // echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $status;
        // die;

        return $this->renderViewAdmin($this->folder . 'list-hide', ['data' => $data]);
    }
}
