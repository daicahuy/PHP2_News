<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\Categories;
use Assignment\Php2News\Models\Comments;
use Assignment\Php2News\Models\Posts;

class DashboardController extends Controller
{
    private Categories $categories;
    private Posts  $posts;
    private Comments  $comment;

    public function __construct()
    {
        $this->categories = new Categories;
        $this->posts = new Posts;
        $this->comment = new Comments;
    }
    public function dashboard()
    {
        $cateSum = $this->categories->categoryNumber();

        $postSum = $this->posts->postSum();

        $postHotSum = $this->posts->postHotSum();

        $commentSum = $this->comment->Commentsum();

        $this->renderViewAdmin(__FUNCTION__, [
            "cateSum" => $cateSum,
            "postSum" => $postSum,
            "postHotSum" => $postHotSum,
            "commentSum" => $commentSum
        ]);
    }
   
}
