<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Categories extends Model
{
    protected $tableName = 'categories';

    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }
    public function getCategoriesById($categoriesId){
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = :id')
            ->setParameter('id', $categoriesId)
            ->fetchAllAssociative();
    }
    public function addCategories($data){
        return $this->queryBuilder
        ->insert($this->tableName)
        ->values([
            'name' => ':name',
            'status' => ':status'
        ])
        ->setParameters($data)
        ->executeQuery();
    }
    public function updateCategories($categoriesId, $data){
        return $this->queryBuilder
        ->update($this->tableName)
        ->set('name', ':name')
        ->set('status', ':status')
        ->where('id = :id')
        ->setParameters(array_merge(['id' => $categoriesId], $data))
        ->executeQuery();
    }
    public function deleteCategories($categoriesId){
        return $this->queryBuilder
        ->delete($this->tableName)
        ->where('id = :id')
        ->setParameter(':id', $categoriesId)
        ->executeQuery();
    }
}
