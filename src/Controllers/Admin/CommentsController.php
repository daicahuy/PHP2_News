<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;

class CommentsController extends Controller
{
    private string $folder = 'pages.comments.';

    // Comments List
    public function list()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Comments Detail Comment
    public function detailComment()
    {
        return $this->renderViewAdmin($this->folder . 'detail-comment');
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
