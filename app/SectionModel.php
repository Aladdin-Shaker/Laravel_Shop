<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionModel extends Model
{
    // create object of the sections table
    protected $table = 'sections';

    // add the columns 
    protected $fillable = ['id', 'name', 'imageName'];

    // function to tell that each section has many aptops
    public function laptops()
    {
        return $this->hasMany('App\LaptopModel', 'sectionId');
    }
}
