<?php
/**
 * Created by PhpStorm.
 * User: cuongvu
 * Date: 18/10/2018
 * Time: 11:43
 */

namespace App\Repository\Contract;

interface PostRepositoryInterface
{
    public function all();
    public function find($id);
}