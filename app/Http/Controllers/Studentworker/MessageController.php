<?php

namespace App\Http\Controllers\Studentworker;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function index()
    {
        return view('studentworker.messages.index');
    }
}
