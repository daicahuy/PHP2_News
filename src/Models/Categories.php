<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Categories extends Model
{
    private string $tableName = 'categories';

    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }
    public function getCategoriesById($categoriesId)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = :id')
            ->setParameter('id', $categoriesId)
            ->fetchAllAssociative();
    }
    public function getByStatus($status)
    {

        // điều kiện truy vấn trong WHERE


        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('status = ?')
            ->setParameter(0, $status)
            ->fetchAllAssociative();
    }
    public function add($name)
    {
        return $this->queryBuilder
            ->insert($this->tableName)
            ->setValue('nameCategory', '?')
            ->setValue('status', 1)
            ->setParameter(0, $name)
            ->executeQuery();
    }
    public function updateStatus($id, $data = [])
    {
        return $this->connect->update(
            $this->tableName,
            $data,
            ['id' => $id]
        );
    }
    public function updateName($id, $data = [])
    {
        return $this->connect->update(
            $this->tableName,
            $data,
            ['id' => $id]
        );
    }
    public function delete($categoriesId)
    {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $categoriesId)
            ->executeQuery();
    }
    public function getByID($id, $columnsName = ['*'])
    {
        return $this->queryBuilder
            ->select(...$columnsName)
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
