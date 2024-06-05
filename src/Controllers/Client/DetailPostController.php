<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Models\Comments;
use Assignment\Php2News\Models\Posts;
use Assignment\Php2News\Models\TagPosts;

class DetailPostController extends Controller
{
    private Posts $posts;
    private Comments $comments;
    private TagPosts $tagPosts;

    public function __construct()
    {
        $this->posts = new Posts;
        $this->comments = new Comments;
        $this->tagPosts = new TagPosts;
    }

    public function index($id)
    {
        // Lấy tin tức theo id
        $post = $this->posts->getByID($id);

        // Lấy ra tổng comments trong bài viết và gán thêm vào $post
        $post['totalCommentInPost'] = $this->comments->getAllCommentByIDPost($id);

        // debug($post);
        
        // Lấy tất cả tags trong post
        $tagsInPost = $this->tagPosts->getAllTagByIDPost($id);

        // Lấy top 10 tin tức phổ biến
        $topPostPopular = $this->posts->getTopNewPopuler(10);

        // Lấy những bài viết liên quan
        $relatedPosts = $this->posts->getAllByIDCategory($post['idCategory']);

        $relatedPostsExceptThisPost = array_filter($relatedPosts, fn($post) => $post['id'] !== (int)$id);

        return $this->renderViewClient(
            'pages.detail-post',
            [
                'post' => $post,
                'tagsInPost' => $tagsInPost,
                'topPostPopular' => $topPostPopular,
                'relatedPostsExceptThisPost' => $relatedPostsExceptThisPost
            ]
        );
    }
}
