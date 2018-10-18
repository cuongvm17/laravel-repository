<?php
/**
 * Created by PhpStorm.
 * User: cuongvu
 * Date: 18/10/2018
 * Time: 11:44
 */

namespace App\Repository\Eloquent;

use App\Repository\Contract\PostRepositoryInterface;
use App\Model\Post;

class PostRepository implements PostRepositoryInterface
{
    private $model;


    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
