<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index() {
        // $documents = Document::latest()->get();
        // $s = "Документы\r\n\r\n";
        // foreach ($documents as $document) {
            
        // $s .= $document->name . "\r\n";
        // $s .= $document->archive . "\r\n";
        // $s .= $document->url . "\r\n";
        // $s .= $document->created_at . "\r\n";
        // $s .= "\r\n";
        // }
        // return response($s) 
        // ->header('Content-Type', 'text/plain');

        $context = ['documents' => Document::latest()->get()];
        return view('index', $context);
        }

    public function detail(Document $document) {
        // $document = Document::find($document);
        
        // $s = $document->name . "\r\n\r\n";
        // $s .= $document->years . "\r\n";
        // $s .= $document->archive . "\r\n";
        // $s .= $document->url . "\r\n";
        // $s .= $document->created_at . "\r\n";
        // return response($s)->header('Content-Type', 'text/plain');
        // }

        return view('detail', ['document' => $document]);
    }
}
