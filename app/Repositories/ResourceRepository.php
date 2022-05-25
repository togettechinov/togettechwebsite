<?php
/**
 * Created by PhpStorm.
 * User: tgb17
 * Date: 09/04/17
 * Time: 16:59
 */

namespace App\Repositories;


abstract class ResourceRepository {

    protected $model;

    public function getPaginate($n) {
        return $this->model->paginate($n);
    }

    public function store($inputs) {
        return $this->model->create($inputs);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id) {
        return $this->model->where('id', $id)->first();
    }

    public function update($id, $inputs) {
        $this->getById($id)->update($inputs);
    }

    public function destroy($id) {
        $this->getById($id)->delete();
    }

}

