<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentistServices extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dentistServices';

    /**
    * The database primary key value.
    *
    * @var string
    */
    //protected $primaryKey = 'schedID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serPerformed', 'DentPerformed', 'timePerformed', 'servDate'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
