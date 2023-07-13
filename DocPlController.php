<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Document;
use Illuminate\Http\Request;

class DocPlController extends Controller
{
    public function index(Place $place 
    // $id
    )
    {   
        // $documents->orderBy('years');
        return view('place', compact('place', 
        // 'documents'
        )
        // ['place' => $place]
    );
        // $place = Place::find($id);

        // foreach ($place->documents as $document) {
            //
        }

        
    }

    // $documents = Place::find(1)->documents()->orderBy('years')->get();

    // public function getPlaces($document_id)
    // {
    //     return Document::find($document_id)->places;
    // }

   
    // public function getDocuments($place_id)
    // {
    //     return Place::find($place_id)->documents;
    // }
// }
