@extends('orders.layout')

@section('content')

<div class="dashboard">

    @can('isUser')
    <div class="userDashboard">
    </div>
    @endcan

    @can('isAdmin')
    <div class="adminDashboard">
    	<div class="orders">
            <a href="{{route('orders.index')}}">
            	See All Orders
            </a>
    	</div>
    </div>
    @endcan

</div>
@endsection