<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'schedules';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'schedId';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'timeFrom', 'timeTo','opStatus','patID','dentID','servID'];

    public function patient()
    {
        return $this->belongsTo('App\Patient', 'patID');
    }
    public function service()
    {
        return $this->belongsTo('App\Service', 'servID');
    }
    public function dentist()
    {
        return $this->belongsTo('App\Dentist', 'dentID');
    }
    
}
