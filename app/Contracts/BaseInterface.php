<?php

namespace App\Contracts;

interface BaseInterface
{
    /**
     * Método responsável por criar os objetos no banco de dados
     * @param $array
     * @return mixed
     */
    public function save($array);

    /**
     * Método responsável por buscar os objetos no banco de dados
     * @return mixed
     */
    public function all();

    /**
     * Método responsável por buscar os objetos no banco de dados a partir de um Id especifico
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Método responsável por setar um objeto espeficico
     * @param $id
     * @param $array
     * @return mixed
     */
    public function update($id, $array);

    /**
     * Método responsável por deletar um objeto especifico do banco
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
