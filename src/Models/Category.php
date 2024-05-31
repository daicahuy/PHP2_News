<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Category extends Model
{
    private string $tableName = 'categories';

    public function getAll(string ...$colums)
    {
        return $this->queryBuilder
            ->select(...$colums)
            ->from($this->tableName, 'c')
            ->where("c.status = 1")
            ->fetchAllAssociative();
    }
}
