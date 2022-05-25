<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'enterprise';

    protected $fillable = [
       'country_id','city_id','service_name','email', 'address','logo','phone','phone2','establishment_year','workers_count','website','fbLink','registration_code','vat_registration','description_en','description_fr', 'employee_count','keywords','latitude','longitude', 'created_at','updated_at',
    ];

    public function country(){
        return $this->belongsTo('App\Models\Countries','country_id');
    }

}
