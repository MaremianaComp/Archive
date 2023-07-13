<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Document;
use Illuminate\Http\Request;

class DocPlController extends Controller
{
    public function index(Place $place 
   
    )
    {   
        
        return view('place', compact('place', 
        
        )
    
    );
       
        }

        
    }

    

   
   
    //     return Place::find($place_id)->documents;
    // }
// }
