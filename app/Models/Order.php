<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
    	'user_id','product_id'
    ];

    public function user()
    {
    	# code...
    	return $this->belongsTo(User::class);
    }

    public function product()
    {
    	# code...
    	return $this->belongsTo(Product::class);
    }
}
