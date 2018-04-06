<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patients';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'patID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['patName', 'address', 'occupation', 'telNo', 'status', 'birthDate','age','sex','medConditions','allergies','balance'];

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function dentist()
    {
        return $this->hasMany('App\Dentist');
    }
    
    public function record()
    {
        return $this->belongsTo('App\Record');
    }
}
