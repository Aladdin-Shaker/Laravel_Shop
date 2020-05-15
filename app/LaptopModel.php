<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaptopModel extends Model
{
    // create object of the sections table
    protected $table = 'laptops';

    // add the columns of the table
    protected $fillable = [
        'id', 
        'sectionId',
        'name', 
        'cpu',
        'gpu', 
        'ram', 
        'hard', 
        'color', 
        'price', 
        'image1', 
        'image2', 
        'image3'
    ];

    // function to get section name 
    public function getSetionName($id)
    {
        // get section name in sections table as the id in the parameter
        $sectionName = SectionModel::find($id)->name;
        return ($sectionName);
    } 
    
    // function to tell that each laptop return to on section
    public function Section()
    {
        return $this->belongsTo('App\SectionModel', 'sectionId');
    }


}
