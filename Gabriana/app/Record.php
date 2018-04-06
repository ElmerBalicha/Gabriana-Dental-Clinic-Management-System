<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'record';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'recordID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dentist', 'servPerformed', 'patient', 'payment'];

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
}
