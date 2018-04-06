<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceScheduled extends Model
{
    //
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'serviceScheduled';

    /**
    * The database primary key value.
    *
    * @var string
    */
  //  protected $primaryKey = 'histID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serPer', 'schedDate'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
