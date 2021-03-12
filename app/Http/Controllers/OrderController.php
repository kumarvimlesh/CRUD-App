<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public static function index()
    {
    	# code...
    	//$users=collect([]);
    	$orders=Order::latest()->paginate(5);
    	/*foreach($orders as $order){
    		$user=Order::find(1)->user;
    		$users->push(['id'=>$user->id,'name'=>$user->name]);
    	}
        echo $users;*/
    	return view('dashboard.allOrders',compact('orders'))
    	   ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
    	return view('orders.makeOrder');
    }

    public function store(Request $request)
    {
    	# code...
    	Order::create($request->all());
    	return redirect()->route('products.index')
                   ->with('success','Your Order Placed Successfully.');
    }

    public static function getuser($order_id)
    {
    	# code...
    	//$uid=(int)$order_id;
    	//echo $uid;
    	//$order_id=3;
    	//echo gettype($uid);
    	$user=Order::find($order_id)->user;
    	//dd($user);
    	//$user=Order::find(1)->user;
    	return $user;
    }

    public static function getproduct($order_id)
    {
    	# code...
    	$product=Order::find($order_id)->product;
    	return $product;
    }
}
