<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Campaign;

class CampaignController extends Controller
{
    //
    public function index()
    {
        return view('admin.campaigns.index');
    }
}
