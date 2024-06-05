<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Comments extends Model
{
    private string $tableName = 'comments';


    // Lấy tất cả comments bằng id post
    public function getAllCommentByIDPost($id)
    {

        $sql = "
            SELECT SUM(totalReplyComment) + COUNT(comments.id) AS totalComment FROM
            ( 
                SELECT
                    B.id,
                    ( SELECT COUNT(*) FROM replycomment A WHERE A.idComment = B.id ) AS totalReplyComment
                FROM comments B
                WHERE idPost = ?
            ) AS comments
        ";

        $stmt = $this->connect->prepare($sql);

        $stmt->bindValue(1, $id);

        return $stmt->executeQuery()->fetchOne();

    }
}
