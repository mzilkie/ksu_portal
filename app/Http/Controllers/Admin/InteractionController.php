<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Interaction;

class InteractionController extends Controller
{
    //
    public function index()
    {
        return view('admin.interactions.index');
    }
}
