<?php
namespace app\services;

use app\repositories\<?= $className ?>Repository;

class <?= $className ?>Service
{
    private $repository;

    public function __construct(<?= $className ?>Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function save($data)
    {
        $model = $this->repository->create($data);
        return $this->repository->save($model);
    }
}
