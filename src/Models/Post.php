<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Post extends Model
{
    protected string $tableName = 'posts';
    // get all
    public function getAll(string ...$colums)
    {
        return $this->queryBuilder
            ->select(...$colums)
            ->from($this->tableName, 'p')
            ->join('p', 'users', 'u', 'p.idAuthor = u.id')
            ->join('p', 'categories', 'c', 'p.idCategory = c.id')
            ->join('p', 'type', 't', 'p.idType = t.id')
            ->where("p.status = ?")
            ->setParameter(0, 1)
            ->orderBy("p.date", "ASC")
            ->fetchAllAssociative();
    }
    // get post by id     
    public function getById(int $id, string ...$colums)
    {
        return $this->queryBuilder
            ->select(...$colums)
            ->from($this->tableName, 'p')
            ->join('p', 'users', 'u', 'p.idAuthor = u.id')
            ->join('p', 'categories', 'c', 'p.idCategory = c.id')
            ->join('p', 'type', 't', 'p.idType = t.id')
            ->where("p.status = 1 AND p.id=$id")
            ->fetchAssociative();
    }
    //hidden post
    public function hidden(int $id, $data = [])
    {
        return $this->connect->update($this->tableName, $data, ['id' => $id]);
    }
    // show post
    public function showPost(int $id, $data = [])
    {
        return $this->connect->update($this->tableName, $data, ['id' => $id]);
    }
    // get all list hidden 
    public function getAllHeide(string ...$colums)
    {
        return $this->queryBuilder
            ->select(...$colums)
            ->from($this->tableName, 'p')
            ->join('p', 'users', 'u', 'p.idAuthor = u.id')
            ->join('p', 'categories', 'c', 'p.idCategory = c.id')
            ->join('p', 'type', 't', 'p.idType = t.id')
            ->where("p.status = ?")
            ->setParameter(0, 0)
            ->orderBy("p.date", "ASC")
            ->fetchAllAssociative();
    }
    // delete post
    public function deletePost(int $id)
    {
        return $this->connect->delete($this->tableName, ["id" => $id]);
    }
}
