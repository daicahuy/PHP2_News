<?php

namespace Assignment\Php2News\Controllers\Admin;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Models\Comment;

class CommentsController extends Controller
{
    private string $folder = 'pages.comments.';
    private Comment $comment;
    public function __construct()
    {
        $this->comment = new Comment;
    }
    // Comments List
    public function list()
    {
       
        $comments = $this->comment->getCommentsWithUsers();
        // debug($comments);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['comments' => $comments]);
    }

    // Comments Detail Comment
    public function detailComment()
    {
        $detail = $this->comment->getUsersWithReply();
        // debug($detail);
        return $this->renderViewAdmin($this->folder . 'detail-comment', ['detail' => $detail]);
    }

    // Comments Delete Comment
    public function deleteComment()
    {
        // HIDE code...
    }

    // Comments Delete Reply
    public function deleteReply()
    {
        // SHOW code...
    }
    
}
