<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentalClinicAssistant extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dentalClinicAssistant';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'asstID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','asstTelNo'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
