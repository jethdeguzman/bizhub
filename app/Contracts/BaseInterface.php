<?php

namespace App\Contracts;

interface BaseInterface
{
    public function all($columns = array('*'));
    // public function paginate($perPage = 15, $columns = array('*'));
    public function find($id, $columns = array('*'), $relations = array());
    public function store(array $data);
    // public function update($id, array $data);
    // public function delete($id);
    public function findBy($field, $value, $columns = array('*'));

}