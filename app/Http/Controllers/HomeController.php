<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaptopModel;
use App\SectionModel;
use App\OrderModel;
use Illuminate\Database\QueryException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // function to get all sections in the Banner section
    public function index()
    {
        $sections = SectionModel::all();

        $laptops = LaptopModel::all();
        
        return view("user.layouts.index", compact('sections', 'laptops')); 
    }

    ////////////////////////////////////////////


    // funcion to save order in the database
    public function saveOrderAjax(Request $req)
    {
        // validation
        $this->validate($req, [

            'name'  =>  'required|min:3',
            'email' => 'required|email|max:255|unique:users',
            'address'  =>  'required|min:3',
            'phone' => 'required|numeric',
            'message' => 'required|min:3'

        ]);

        $newOrder = new OrderModel();

        // assign the comming values of AJAX code to the columns in the database
        $newOrder->laptopId = $req->laptopId;
        $newOrder->name = $req->name;
        $newOrder->email = $req->email;
        $newOrder->address = $req->address;
        $newOrder->phone = $req->phone;
        $newOrder->message = $req->message;              
        // save in the db
        $newOrder->save();
        // return using json
        return response()->json(['done']);
    } 

    // function to show contact page
    public function contact()
    {
        return view ("user.layouts.contact");
    }

    // function to show about page
    public function about()
    {
        return view ("user.layouts.about");
    }

    // function to show All Laptops page
    public function laptop()
    {
        $laptops = LaptopModel::all();
        return view ("user.layouts.getAllLaptops", compact("laptops"));
    }

}
