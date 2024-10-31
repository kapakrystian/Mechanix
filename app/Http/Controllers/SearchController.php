<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class SearchController extends Controller
{
    public function searchClient(Request $request)
    {
        $search = $request->input('search');
        $results = Client::where('last_name', 'like', "%$search%")
        ->orWhere('first_name', 'like', "%$search%")
        ->orWhere('email', 'like', "%$search%")
        ->orWhere('phone', 'like', "%$search%")
        ->get()
        ->toQuery()
        ->simplePaginate(perPage: 12);

        return view('clients.index', [
            'clients' => $results,
            'heading' => "Wyniki wyszukiwania dla: $search",
            'backButton' => true
        ]);
    }
}
