<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderModel;
use Illuminate\Mail\Mailable;
use Mail;

class OrderController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // function to get all orders
    public function getAllOrders()
    {
        $orders = OrderModel::all();
        return view('admin.orders.getOrders', compact('orders'));
    }

    // function to change order state to pindding
    public function pending($id)
    {
        $order = OrderModel::find($id);
        $order->state = 0;
        $order->save();
        return back();
    }

    // function to change order state to accept
    public function accept($id)
    {
        $order = OrderModel::find($id);
        $order->state = 1;

        // send email by gmail to user
        /* $data = array(

            'name' => $order->name,
            "email" => $order->email
        );    */
        // mail class in php by default
        /* Mail::send('emails.mail', $data, function($message) {
            
            $message->to(($order->email , $order->name) ->subject('You Order Accepted, Welcome');
            $message->from('snipershaker@gmail.com','Alladdin Shaker');
        }); */
        
        //dd($order->email);

        $order->save();
        return back();
    }

    // function to change order state to reject
    public function reject($id)
    {
        $order = OrderModel::find($id);
        $order->state = 2;
        $order->save();
        return back();
    }

}
