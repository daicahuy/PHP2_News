<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Settings extends Model
{
    private string $tableName = 'setting';

    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }
    public function update( $data = [])
    {
        return $this->connect->update($this->tableName, $data);
    }
}
