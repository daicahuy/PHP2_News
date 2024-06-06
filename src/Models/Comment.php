<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Comment extends Model{

    private string $tableName = 'comments';
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

}
