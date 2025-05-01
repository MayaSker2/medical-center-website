<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\Contact;

class SearchService
{
    public function search($query)
    {
        $faqs = Faq::where('question', 'LIKE', "%{$query}%")
                    ->orWhere('answer', 'LIKE', "%{$query}%")
                    ->select('question', 'answer')
                    ->get();

        $contacts = Contact::where('type', 'LIKE', "%{$query}%")
                    ->orWhere('value', 'LIKE', "%{$query}%")
                    ->select('type', 'value')
                    ->get();

        return [
            'faqs' => $faqs,
            'contacts' => $contacts,
        ];
    }
}
