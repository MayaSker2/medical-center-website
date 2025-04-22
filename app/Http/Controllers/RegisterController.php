<?php

namespace App\Http\Controllers;

use App\Services\RegisterService;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;


class RegisterController extends Controller
{
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }


  public function register(RegisterRequest $request){

    $data = $this->registerService->register($request->validated());
    return response()->json([
        'message' => 'Account created successfully.',
        'data' => new UserResource($data),
    ]);
  }



}
