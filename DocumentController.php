<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index() 
    {
        $context = ['documents' => Document::latest()->get()];
        return view('index', $context);
    }

    public function detail(Document $document) 
    {
        return view('detail', ['document' => $document]);
    }

    public function autoCompleteSearch(Request $request): JsonResponse
    {
        $data = [];
    
        if($request->filled('q')){
            $data = User::select("name", "id")
                        ->where('name', 'LIKE', '%'. $request->get('q'). '%')
                        ->get();
        }
     
        return response()->json($data);
    }
    
}
