<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class User extends Model
{
    private string $tableName = 'users';

    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }
}
