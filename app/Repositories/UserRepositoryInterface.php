<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /*
        faz a busca de todos os registro de usuários no banco de dados
        e retorna todos os registros encontrados.
    */
    public function getAll(string $filter = ''): array;

    /*
        faz a busca de um usuário específico no banco de dados
        e retorna o registro pelo id informado, caso não encontre, o retorno será null
    */
    public function findById(string $id): object|null;


    /*
        realiza a inserção dos dados de usuários no banco de dados
    */
    public function create(array $data): object;

    /*
        faz a alteração dos dados de um usuário específico pelo seu id
    */
    public function update(string $id, array $data): object|null;

    /*
        Deleta um registro de usuário do banco de dados pelo id do usuário
    */
    public function delete(string $id): bool;
}
