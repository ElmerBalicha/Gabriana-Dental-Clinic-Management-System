<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'servID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['servName', 'price'];

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function inventory()
    {
        return $this->hasMany('App\Inventory');
    }
}
