<?php
/**
 * Created by PhpStorm.
 * User: cuongvu
 * Date: 18/10/2018
 * Time: 11:44
 */

namespace App\Repository\Redis;

use App\Repository\Contract\PostRepositoryInterface;

class RedisPostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return 'Get all product from Redis';
    }

    public function find($id)
    {
        return 'Get single product by id: ' . $id;
    }
}