<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Manage;

class ManageController extends Controller
{
    //
    public function index()
    {
        return view('admin.manage.index');
    }
}
