<?php

namespace App\Http\Controllers\Admission;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Campaign;

class CampaignController extends Controller
{
    //
    public function index()
    {
        return view('admission.campaigns.index');
    }
}
