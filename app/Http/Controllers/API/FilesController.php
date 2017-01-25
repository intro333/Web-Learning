<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    function getDiagramImage(Request $request){

        $part = $request->input('part_id');
        $lesson = $request->input('lesson_id');
        $fileName = 'diagram_p' . $part . '_l' . $lesson . '.png';

        $contents = Storage::get($fileName);
        $mime = getimagesize(storage_path('/app/diagram_p1_l1.png'));
        $array = ['mimeWidth' => $mime[0], 'mimeHeigth' => $mime[1], 'contents' => base64_encode($contents)];
        return $array;
    }
}
