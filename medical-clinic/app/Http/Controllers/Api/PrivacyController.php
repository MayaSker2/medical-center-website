<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function show(){
        $privacy = Privacy::latest('last_updated')->first();
        return $this->successResponse($privacy, 'success', 200);
    }
}
