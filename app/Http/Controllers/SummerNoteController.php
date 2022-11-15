<?php

namespace App\Http\Controllers;

use App\Models\summer_notes_upload;
use Illuminate\Http\Request;

class SummerNoteController extends Controller
{
         public function store (Request $request) {
            $data =  new summer_notes_upload();
            if(file($request->file)){
                $file = save_image($request->file);
                $data->files = $file;
                $data->save();
                return "/images/".$file;
            }
         }
}
