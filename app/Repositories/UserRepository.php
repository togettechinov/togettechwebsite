<?php
/**
 * Created by PhpStorm.
 * User: chopgwe
 * Date: 18/04/2017
 * Time: 14:25
 */

namespace App\Repositories;

use App\Models\User;

class UserRepository extends ResourceRepository {

    /**
     * @param User $user
     */
    public function __construct(User $user) {
        $this->model = $user;
    }

    public function getAll(){

      return $this->model->get();
    }

    public function getUserByCategory($category, $first = true){

        if($first){
            $result = $this->model->with('country','company')
                ->where('category',$category)
                ->first();
        }else{
            $result = $this->model->with('country','company')
                ->where('category',$category)
                ->get();
        }

        return $result;
    }

    public function getCompany($user)
    {
        $result = $this->model->with('company')
            ->where('id', $user)
            ->first();

        return $result;
    }


    public function getByCompany($company_id)
    {
        $result = $this->model->with('company')
            ->where('company_id', $company_id)
            ->get();

        return $result;
    }

    public function getByName($user){
        $result = $this->model->where('username',$user)
                        ->first();

        return $result;
    }

    public function getUserBYId($id){
         $result = $this->model->with('country','company','services')
                               ->where('id',$id)
                               ->first();

        return $result;
    }

    public function getUser($tableAttribute,$value){
        $result = $this->model->with('region','country')
                               ->where($tableAttribute,$value)
                               ->first();

        return $result;
    }

    public function getSuperAdmin(){
        $result = $this->model->where('type','super-admin')
                       ->first();

        return $result;
    }
}