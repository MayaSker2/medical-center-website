<?php

namespace App\Http\Controllers\Api;

use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index()
    {
        $favs = Favourite::where('user_id', Auth::id())->get();

    if ($favs->isEmpty()) {
        return $this->errorResponse('لا يوجد مفضلات حتى الآن',404);

    }
    return $this->successResponse($favs, 'success', 200);
    }

    public function store(Request $request)
    {
        $fav = Favourite::create([
            'user_id' => Auth::id(),
            'item_type' => $request->item_type,//القسم أو الطبيب المفضل مثلا
        ]);
        return $this->successResponse($fav, 'success', 200);

        return response()->json($fav);
    }

    public function destroy($id)
    {
        $fav = Favourite::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $fav->delete();
        return $this->successResponse($fav, 'favourite deleted successfuly', 200);

    }
}
