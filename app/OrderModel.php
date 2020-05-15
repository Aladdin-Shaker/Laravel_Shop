<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    // create object of the orders table
    protected $table = 'orders';

    // add the columns 
    protected $fillable = ['id', 'laptopId', 'name', 'email', 'address', 'message', 'phone', 'state'];

    // function to get laptop name instead of id
    public function getLaptopName($id)
    {
        $laptopName = LaptopModel::find($id)->name;
        return ($laptopName);
    }
}
