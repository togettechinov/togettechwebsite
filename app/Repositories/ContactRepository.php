<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/07/2018
 * Time: 15:12
 */

namespace App\Repositories;

use App\Models\Contact;

/**
 * Class CityRepository
 * @package App\Repositories
 */

class ContactRepository extends ResourceRepository{


    public function __construct( Contact $contact) {
        $this->model = $contact;
    }

    public function getAll(){
        return $this->model->orderBy('created_at', 'desc')->get();
    }

}
