<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dentists';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'dentID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dentName', 'dentTelNo'];

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
