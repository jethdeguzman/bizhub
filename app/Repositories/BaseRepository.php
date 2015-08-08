<?php

namespace App\Repositories;

class BaseRepository
{
    protected $modelName;

    public function all($columns = array('*'))
    {
        $instance = $this->getNewInstance();
        return $instance->get($columns);
    }

    public function find($id,$columns = array('*'), $relations = array())
    {
        $instance = $this->getNewInstance();
        return $instance->with($relations)->find($id, $columns);
    }

    public function store(array $data)
    {
        $instance = $this->getNewInstance();
        return $instance->create($data);
    }

    protected function getNewInstance()
    {
        $model = $this->modelName;
        return new $model;
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        $instance = $this->getNewInstance();
        return $instance->select($columns)
                        ->where($field, $value)
                        ->get();
    }
}