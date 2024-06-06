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
    public function Commentsum()
    {
        return $this->queryBuilder
        ->select('
            (SELECT COUNT(*) FROM comments) + 
            (SELECT COUNT(*) FROM replycomment) AS SoLuong
        ')
        ->fetchOne();
    }
    public function postHot(){
        return $this->queryBuilder
        ->select('COUNT(DISTINCT id) AS numberPostHot')
       ->from('posts')
       ->where('idType = 2')
       ->fetchAssociative();
    }

    public function postSum(){
        return $this->queryBuilder
        ->select('COUNT(DISTINCT id) AS numberPost')
       ->from('posts')
       ->fetchAssociative();
    }
}
