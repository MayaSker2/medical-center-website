<?php

namespace App\Http\Controllers\Api;

use App\Models\Faq;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    protected $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    public function search(Request $request){

        $query = $request->input('query');

        if (strlen($query) < 3) {
            return $this->errorResponse('يجب ان تحوي كلمة البحث على 3 حروف على الأقل',400);
        }


        $results = $this->searchService->search($query);

        if ($results['faqs']->isEmpty() && $results['contacts']->isEmpty()) {
            return $this->errorResponse('لم يتم العثور على نتائج تطابق بحثك: ' . $query, 404);
        }

        return $this->successResponse($results, 'success', 200);
    }
}
