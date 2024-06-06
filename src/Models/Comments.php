<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Comments extends Model
{
    private string $tableName = 'comments';


    // Lấy tất cả comments bằng id post
    public function getAll(){
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->fetchAllAssociative();
    }
    public function getByID($id)
{
    return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->where('id = :id')
        ->setParameter('id', $id)
        ->fetchAllAssociative();
}
public function getCommentsWithUsers(){
    return $this->queryBuilder
    ->select('B.id', 'C.name', 'C.avatar', 'B.content', 'B.date', '(SELECT COUNT(*) AS totalReply FROM replycomment A WHERE A.idComment = B.id) AS totalReply')
    ->from('comments', 'B')
    ->innerJoin('B', 'users', 'C', 'B.idUser = C.id')
    ->fetchAllAssociative();
}
public function getUsersWithReply(){
    return $this->queryBuilder
    ->select('r.id', 'u.name','r.content','r.date','u.avatar','u2.name rpName' )
    ->from('replycomment', 'r')
    ->innerJoin('r', 'users', 'u', 'u.id = r.idUser')
    ->innerJoin('r', 'users', 'u2', 'u2.id = r.idReplyUser')
    ->fetchAllAssociative();
}
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
    public function delete($idCmt){
        return $this->queryBuilder
        ->delete($this->tableName)
        ->where('id = ?')
        ->setParameter(0,$idCmt)
        ->executeQuery();
    }
    public function deleteReply($idRepCmt){
        return $this->queryBuilder
        ->delete('replycomment')
        ->where('id = ?')
        ->setParameter(0,$idRepCmt)
        ->executeQuery();
    }

}
