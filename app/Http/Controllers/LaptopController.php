<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaptopModel;
use App\SectionModel;

class LaptopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    // function to show all laptops
    public function getAllLaptops()
    {
        // select * laptops from the table and store them in this variable
        $laptops = LaptopModel::all();

        return view("admin.laptops.getlaptops", compact("laptops"));
    }

    // function to create a add anew laptop
    public function create()
    {
        // get all sections
        $allSections = SectionModel::all();

        return view('admin.laptops.create', compact('allSections'));
    }

    // function to save a add a new laptop
    public function save(Request $req)
    {
        //dd($req);

        // create object of laptop model
        $newlaptop = new LaptopModel();

        // assign all values of the form to the columns in the database
        $newlaptop->sectionId = $req->sectionId;
        $newlaptop->name = $req->name;
        $newlaptop->cpu = $req->cpu;
        $newlaptop->gpu = $req->gpu;
        $newlaptop->ram = $req->ram;
        $newlaptop->hard =$req->hard;
        $newlaptop->color = $req->color;
        $newlaptop->price = $req->price;

        // save image1 if exist
        $file1 = $req->file('inputimage1');
        if($file1 != null)
        {
            $imageName = $file1->getClientOriginalName();
            $folderPath = 'images/new-laptops';
            $file1->move($folderPath, $imageName);
            $newlaptop->image1 = $imageName; 

        }
        // save image2 if exist
        $file2 = $req->file('inputimage2');
        if($file2 != null)
        {
            $imageName = $file2->getClientOriginalName();
            $folderPath = 'images/new-laptops';
            $file2->move($folderPath, $imageName);
            $newlaptop->image2 = $imageName; 
        }
        // save image3 if exist
        $file3 = $req->file('inputimage3');
        if($file3 != null)
        {
            $imageName = $file3->getClientOriginalName();
            $folderPath = 'images/new-laptops';
            $file3->move($folderPath, $imageName);
            $newlaptop->image3 = $imageName; 
        }

        $newlaptop->save();

        return redirect('/admin/get-laptops');

    }

    // function to show information of laptop to edit it
    public function edit($id)
    {
        //dd($id);
        $editLaptop = LaptopModel::find($id);
        $sections = SectionModel::all();
        return view("admin.laptops.edit", compact('editLaptop','sections'));     
    }

    // function to update information of laptop and sae in the database
    public function update($id, Request $req )
    {
         
        
        $updateLaptop = LaptopModel::find($id);

        // assign all values of the form to the columns in the database
        $updateLaptop->sectionId = $req->sectionId;
        $updateLaptop->name = $req->name;
        $updateLaptop->cpu = $req->cpu;
        $updateLaptop->gpu = $req->gpu;
        $updateLaptop->ram = $req->ram;
        $updateLaptop->hard =$req->hard;
        $updateLaptop->color = $req->color;
        $updateLaptop->price = $req->price;

        // save image1 if exist
        $file1 = $req->file('image1');
        if($file1 != null)
        {
            $imageName = $file1->getClientOriginalName();
            $folderPath = '/images/new-laptops';
            $file1->move($folderPath, $imageName);
            $newlaptop->image1 = $imageName; 
        }
        // save image2 if exist
        $file2 = $req->file('image2');
        if($file2 != null)
        {
            $imageName = $file2->getClientOriginalName();
            $folderPath = '/images/new-laptops';
            $file2->move($folderPath, $imageName);
            $newlaptop->image2 = $imageName; 
        }
        // save image3 if exist
        $file3 = $req->file('image3');
        if($file3 != null)
        {
            $imageName = $file3->getClientOriginalName();
            $folderPath = '/images/new-laptops';
            $file3->move($folderPath, $imageName);
            $newlaptop->image3 = $imageName; 
        }

        $updateLaptop->save();

        return redirect('/admin/get-laptops');
        
    }

    //function to delete a table of the database
    public function delete($id)
    {
        $deleteLaptop = LaptopModel::find($id);
        $deleteLaptop->delete();
        return redirect('/admin/get-laptops');
    }
}   
