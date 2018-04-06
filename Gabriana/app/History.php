<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
       /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'history';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'histID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dateAdded', 'supplier', 'receiver', 'invAdded', 'qtyAdded','qtyAdded'];

    public function inventory()
    {
        return $this->hasOne('App\Inventory');
    }
}
