<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call this model to use the obect newSection
use App\SectionModel;
use App\LaptopModel;

class SectionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    // function to get all the sections
    public function getAllSections()
    {   
        // to stroe all the sections in this variable
        $sections = SectionModel::all();

    	return view('admin.sections.getSection', compact("sections"));
    }

    // function to add section
    public function addSection()
    {
    	return view('admin.sections.addSection');
    }

    // function to save the data of new section
    public function saveSection(Request $req)
    {
        $this->validate($req, [

            // form validation for add a new section
            'inputName'  =>  'required|min:3',
            'inputPhoto' => 'required|mimes:jpeg,bmp,png,jpg'
        
    
         ]);

        // create object of the section model
        $newSection = new SectionModel();

        
    	// get image
    	$file = $req->file('inputPhoto');
    	$imageName = $file->getClientOriginalName();
    	$distinPath = "images/new-sections";
    	$file->move($distinPath, $imageName); 

  
    	// Assign the attributes of this model to the comming attributes of the form
    	$newSection->name      = $req->inputName;
    	$newSection->imageName = $imageName;

    	// save in the databse
    	$newSection->save();

        //dd("Good");

        // redirect to the sections pages
    	return redirect("admin/get-sections");
        

    }

    // function to edit section already exist / to edite data in the view
    public function editSection($id)
    {
        // find the element of the model according the comming id of the view
        $EditSection = SectionModel::find($id); // find => to make a query in the database
        //dd($editSetion);
        return view("admin.sections.editSection", compact('EditSection'));
    }

    // function to update section already exist / to update data in the databae
    public function updateSection(Request $req, $id)
    {
        // to test if we recieved a request
        //dd($req);

        // find the section according the coming id of the form
        $updateSection = SectionModel::find($id);
        // change the name in the database according the coming name of the input
        $updateSection->name = $req->inputName;
        // store in this variable coming request image of the form
        $file = $req->file('inputPhoto');
        // check if the request is null or no / user maybe not input 
        if($file != null)
        {
            // get the image name
            $fileName = $file->getClientOriginalName();
            // make destination to store the images
            $destinationPath = 'uploads-images';
            // move the image to the destination
            $file->move($destinationPath, $fileName);
            // change the image name attribute with the nae image
            $updateSection->imageName = $fileName;
        }
        $updateSection->save();
        return redirect('/admin/get-sections');

    }
    
    // function to delete section already exist 
    public function deleteSection(SectionModel $id)
    {

        if(count($id->laptops))
        {
            $sections = SectionModel::all();
            // dd($id);
            return view('admin.sections.deleteAll', compact('id', 'sections'));
        }
        else
        {
            //dd('Welcome');

            //search about this id in the database
            //$deleteSection = SectionModel::find($id);

            // delete the record
            $id->delete();

            // return to the sections page
            return redirect("admin/get-sections");
        }
        
    } 

    // function to delete section already exist 
    public function deleteAll(SectionModel $id)
    {
        
        //search about this id in the database
        //$deleteSection = SectionModel::find($id);

        $id->delete();

        $id->laptops()->delete();

        // return to the sections page
        return redirect("admin/get-sections");
    }
    
    // function to show all laptops with the same section in the frontend
    public function getAllLaptops($id)
    {
        // get the laptop from the database where section id = section id of the selected section in the view
        $allLaptops = LaptopModel::where('sectionId', $id)->get();
        return view('user.layouts.laptopSection', compact('allLaptops'));

       // dd($id);
    }


}
