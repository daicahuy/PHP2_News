<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class ReplyComment extends Model
{

    private string $tableName = 'replycomment';


    public function getReplyCommentByIDComment($id)
    {
        return $this->queryBuilder
            ->select('r.id', 'u.name', 'r.content', 'r.date', 'u.avatar', 'u2.name rpName')
            ->from($this->tableName, 'r')
            ->innerJoin('r', 'users', 'u', 'u.id = r.idUser')
            ->innerJoin('r', 'comments', 'c', 'r.idComment = c.id')
            ->innerJoin('r', 'users', 'u2', 'u2.id = r.idReplyUser')
            ->where('c.id = ?')
            ->setParameter(0, $id)
            ->fetchAllAssociative();
    }

    public function deleteByIDComment($id)
    {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('idComment = ?')
            ->setParameter(0, $id)
            ->executeQuery();
    }

    public function deleteByID($id)
    {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->executeQuery();
    }
}
