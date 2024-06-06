<?php

namespace Assignment\Php2News\Controllers\Admin;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Models\Comments;

class CommentsController extends Controller
{
    private string $folder = 'pages.comments.';
    private Comments $comment;
    public function __construct()
    {
        $this->comment = new Comments;
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
    public function deleteComment($idCmt)
    {
        try {
            $comments = $this->comment->delete($idCmt);
            $_SESSION['notify']['success'][] = "Deleted comment !";
        } catch (\Throwable $e) {
            $_SESSION['notify']['danger'][] = $e->getMessage();
        }
        return $this->renderViewAdmin($this->folder . 'list', ['comments' => $comments]);
    }

    // Comments Delete Reply
    public function deleteReply($idRepCmt)
    {
        
        try {
            $detail = $this->comment->deleteReply($idRepCmt);
            $_SESSION['notify']['success'][] = "Deleted comment !";
        } catch (\Throwable $e) {
            $_SESSION['notify']['danger'][] = $e->getMessage();
        }
        return $this->renderViewAdmin($this->folder . 'detail-comment', ['detail' => $detail]);
        
    }
    
}
