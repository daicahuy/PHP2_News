<?php

namespace Assignment\Php2News\Models;

use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Commons\Model;

class Posts extends Model
{

    private string $tableName = 'posts';


    // Lấy top ... tin tức theo ngày mới nhất và kiểu ...
    // Mặc định là top 1, kiểu 1 (Normal)
    public function getTopByType($top = 1, $type = 1)
    {
        $queryBulder = clone($this->queryBuilder);

        return $queryBulder
        ->select('A.id, A.title, A.image, A.date, B.id as idCategory, B.nameCategory, C.name as nameAuthor')
        ->from($this->tableName, 'A')
        ->innerJoin('A', 'categories', 'B', 'A.idCategory = B.id')
        ->innerJoin('A', 'users', 'C', 'A.idAuthor = C.id')
        ->innerJoin('A', 'type', 'D', 'A.idType = D.id')
        ->where(
            $queryBulder->expr()->and(
                'D.id = ?',
                'A.status = 1'
            )
        )
        ->setParameter(0, $type)
        ->orderBy('A.date', 'DESC')
        ->setMaxResults($top)
        ->fetchAllAssociative();

    }

    // Lấy tất cả tin tức theo ngày hiện tại
    public function getAllCurrentDate()
    {
        $queryBulder = clone($this->queryBuilder);

        $currentDate = date("Y-m-d") . '%';

        return $queryBulder
        ->select('A.id, A.title, A.image, A.date, B.nameCategory, C.name as nameAuthor')
        ->from($this->tableName, 'A')
        ->innerJoin('A', 'categories', 'B', 'A.idCategory = B.id')
        ->innerJoin('A', 'users', 'C', 'A.idAuthor = C.id')
        ->where(
            $queryBulder->expr()->and(
                $queryBulder->expr()->like('A.date', '?'),
                'A.status = 1'
            )
        )
        ->setParameter(0, $currentDate)
        ->orderBy('A.date', 'DESC')
        ->fetchAllAssociative();
    }

    // Lấy top 9 tin tức nhiều view nhất trong 3 ngày gần nhất
    public function getTop9NewPopuler()
    {
        $queryBulder = clone($this->queryBuilder);

        return $queryBulder
        ->select('A.id, A.title, A.image, A.date, A.views, B.id as idCategory, B.nameCategory, C.name as nameAuthor')
        ->from($this->tableName, 'A')
        ->innerJoin('A', 'categories', 'B', 'A.idCategory = B.id')
        ->innerJoin('A', 'users', 'C', 'A.idAuthor = C.id')
        ->where(
            $queryBulder->expr()->and(
                'A.date >= DATE_ADD(CURDATE(), INTERVAL - 3 DAY)',
                'A.status = 1'
            )
        )
        ->orderBy('A.views', 'DESC')
        ->setMaxResults(9)
        ->fetchAllAssociative(); 
    }

}
