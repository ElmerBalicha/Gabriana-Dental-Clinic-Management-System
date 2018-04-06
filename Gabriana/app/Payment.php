<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'payID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datePaid', 'amount'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
