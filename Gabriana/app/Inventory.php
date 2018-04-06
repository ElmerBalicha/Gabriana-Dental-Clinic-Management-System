<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventory';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'invID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['invName', 'quantity', 'low_stock_quantity', 'unit'];

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
