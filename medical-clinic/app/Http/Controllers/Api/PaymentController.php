<?php

namespace App\Http\Controllers\Api;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('user_id', Auth::id())->get();
        return $this->successResponse($payments, 'this is payment information.', 200);

    }

    public function store(Request $request)
    {
        $payment = Payment::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'card_number' => $request->card_number,
        ]);
        return $this->successResponse($payment, 'Payment method added successfully', 201);
    }


    public function destroy($id)
    {
        $payment = Payment::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $payment->delete();
        return $this->successResponse('null', 'Payment method deleted successfully', 200);

    }

}
