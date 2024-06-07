<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class ReplyComment extends Model
{
    private string $tableName = 'replycomment';
    // lấy replycomment bình luận con

    public function getReplyComment($id)
    {
        $queryBuilder = clone ($this->queryBuilder);
        return $queryBuilder
            ->select('r.id', 'u.name', 'u.id idReplyUser','r.content', 'r.date', 'u.avatar', 'u2.name rpName')
            // ,'(SELECT cm.id FROM comments AS cm JOIN replycomment AS r ON cm.id = r.idComment WHERE r.id=r.id) AS idComment'
            ->from('replycomment', 'r')
            ->innerJoin('r', 'users', 'u', 'u.id = r.idUser')
            ->innerJoin('r', 'users', 'u2', 'u2.id = r.idReplyUser')
            ->innerJoin('r', 'comments', 'cmt', 'r.idComment = cmt.id')
            ->where('cmt.id = ?')
            ->setParameter(0, $id)
            ->fetchAllAssociative();
    }
    // add replycomment
    public function addReply($data = [])
    {
        return $this->connect->insert($this->tableName, $data);
    }
}
