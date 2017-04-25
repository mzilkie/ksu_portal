<?php

namespace App\Http\Controllers\Admission;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('admission.tasks.index');
    }
}
