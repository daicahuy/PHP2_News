<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Commons\Model;

class User extends Model
{
    private string $tableName = 'users';

    // Hàm getAll: Lấy tất cả bảng
    public function getAll()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }

    // Hàm getByStatus: Lấy theo trạng thái
    public function getByStatus(
        $status = [2],
        $columnsName = ['*'],
        $orderBy = ['id', 'DESC']
    )
    {

        // điều kiện truy vấn trong WHERE
        $condition = '';
        
        if (count($status) >= 2) {

            // các thông số trong where
            $params = [];
        
            foreach($status as $statu) {
                $params[] = $this->queryBuilder->expr()->eq('status', $statu);
            }

            $condition = $this->queryBuilder->expr()->or(
                ...$params
            );
            
        } else {
            $condition = "status = {$status[0]}";
        }

        return $this->queryBuilder
            ->select(...$columnsName)
            ->from($this->tableName)
            ->where($condition)
            ->orderBy(...$orderBy)
            ->fetchAllAssociative();

    }

    // Hàm getByID: Lấy theo ID
    public function getByID($id, $columnsName = ['*'])
    {
        return $this->queryBuilder
            ->select(...$columnsName)
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

    // Hàm update: Update
    public function update($id, $data = [])
    {
        return $this->connect->update(
            $this->tableName,
            $data,
            ['id' => $id]
        );
    }


}
