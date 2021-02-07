<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function List()
    {
        return view('admin.product.listproduct');
    }
    function Edit()
    {
        return view('admin.product.editproduct');
    }
    function Add()
    {
        return view('admin.product.addproduct');
    }
}
