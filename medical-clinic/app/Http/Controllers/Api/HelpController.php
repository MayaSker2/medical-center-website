<?php

namespace App\Http\Controllers\Api;

use App\Models\Faq;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HelpController extends Controller
{
    public function Faq()
    {
        $types = Faq::getTypes();
    return $this->successResponse($types, 'this is faq types.', 200);
    }


    public function show($type){
        $faqs = Faq::where('type', $type)
        ->select('question', 'answer')
        ->get();
        if ($faqs->isEmpty()) {
            throw new ModelNotFoundException();
        }
     return $this->successResponse($type, $faqs, 200);

    }

    public function contact(){
        $contacts = Contact::select('type', 'value')->get();
        return $this->successResponse($contacts, 'this is Contact information.', 200);
    }
}
