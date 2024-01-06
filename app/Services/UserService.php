<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

Class UserService
{
    private $repository;


    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll(string $filter = '')
    {
        return $this->repository->getAll($filter);
    }

    public function findById(string $id)
    {
        return $this->repository->findById($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(string $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(string $id)
    {
        return $this->repository->delete($id);
    }
}
