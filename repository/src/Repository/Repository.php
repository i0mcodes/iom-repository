<?php

namespace Repositories\Repository;


use Repositories\Interfaces\RepositoryInterface;

class Repository implements RepositoryInterface {

    /**
     * nom de la class model du repository
     * @var
     */
    protected $model;

    public function create(array $attributes)
    {
        /* appel le function create du model */
        return call_user_func_array("{$this->model}::create", array($attributes));
    }

    public function all($columns = array('*'))
    {
        return call_user_func_array("{$this->model}::all", array($columns));
    }

    public function find($id, $columns = array('*'))
    {
        return call_user_func_array("{$this->model}::find", array($id, $columns));
    }

    public function destroy($ids)
    {
        return call_user_func_array("{$this->model}::destroy", array($ids));
    }
}