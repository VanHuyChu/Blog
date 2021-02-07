<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function List()
    {
        return view('admin.user.listuser');
    }
    function Edit()
    {
        return view('admin.user.edituser');
    }
    function Add()
    {
        return view('admin.user.adduser');
    }
}
