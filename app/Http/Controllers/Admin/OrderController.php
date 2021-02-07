<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function orderList()
    {
       return view('admin.order.order');
    }
    function orderDetail()
    {
       return view('admin.order.detailorder');
    }
    function ordeProcessed()
    {
       return view('admin.order.processed');
    }
}
