@extends('orders.layout')

@section('content')
    <div>
   	    <div>
   	    	<table class="table table-bordered">
   	    		<thead>
   	    			<th>No.</th>
   	    			<th>Product Id</th>
   	    			<th>Product Name</th>
   	    			<th>User Id</th>
   	    			<th>User Name</th>
   	    			<th>Date</th>
   	    		</thead>
   	    		@foreach($orders as $order)
   	            <tr>
   	            	<td>{{$order->id}}</td>
   	            	@php
                    $user = new App\Models\User;
                    $user = OrderController::getuser($order->id);
                    $product = new App\Models\Product;
                    $product = OrderController::getproduct($order->id);
                    echo "<td>$product->id</td>";
                    echo "<td>$product->name</td>";
                    echo "<td>$user->id</td>";
                    echo "<td>$user->name</td>"
                    @endphp
   	            	<td>{{$order->updated_at}}</td>
   	            </tr>
   	            @endforeach
   	    	</table>
   	    </div>
    </div>
@endsection