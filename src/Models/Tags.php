<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Model;

class Tags extends Model
{
    private string $tableName = 'tags';

    //Đổ toàn bộ dữ liện có trạng thái hiện là 1
    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('status = 1')
            ->fetchAllAssociative();
            
    }
    //Đổ toàn bộ dữ liệu có trạng thái ẩn là 0
    public function getAllHide()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('status = 0')
            ->fetchAllAssociative();
    }
    // Mở trạng thái về hiện cho tags
    public function getShow(int $id, $data = [])
    {
        return $this->connect->update($this->tableName, $data, ['id' => $id]);
    }

    // Ẩn tags có về trạng thái 0
    public function hide(int $id, $data = [])
    {
        return $this->connect->update($this->tableName, $data, ['id' => $id]);
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
    //Xóa tags trong trạng thái ẩn theo id
    public function delete($id)
    {
        return $this->connect->delete($this->tableName, ['id' => $id]);
    }
    public function insert($name)
    {
        return $this->queryBuilder
        ->insert($this->tableName)
        ->setValue('nameTag','?')
        ->setValue('status', 1)
        ->setParameter(0, $name)
        ->executeQuery();
    }
    public function updateName($id, $data = [])
    {
        return $this->connect->update(
            $this->tableName,
             $data,
             ['id'=> $id]
        );
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
