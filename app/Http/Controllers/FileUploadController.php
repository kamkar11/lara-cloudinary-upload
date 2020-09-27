<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {
        $request->file('file')->store('images');

        return back()
            ->with('success', 'File uploaded successfully');
    }
}
