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
    ->select('u.id', 'p.content', 'u.name', 'p.date','u.avatar' )
    ->from('users', 'u')
    ->innerJoin('u', 'comments', 'p', 'u.id = p.idUser')
    ->fetchAllAssociative();
}
public function getUsersWithReply(){
    return $this->queryBuilder
    ->select('r.id', 'u.name', 'r.date','u.avatar')
    ->from('replycomment', 'r')
    ->innerJoin('r', 'users', 'u', 'u.id = r.idUser')
    ->fetchAllAssociative();
}

}
