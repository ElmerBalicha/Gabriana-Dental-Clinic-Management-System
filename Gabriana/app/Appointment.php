<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointment';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'apptID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['scheduledDate','services', 'invUsed','time_from','time_to' ,'discount', 'bill','opStatus'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
