<?php

namespace App\Http\Controllers;

use App\Models\DocumentStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentStoreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:pdf,txt|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        $filePath = $request->file('document')->store('documents', 'public');

        DocumentStore::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'document_path' => $filePath,
        ]);

        return redirect()->back()->with('success' , 'Document Uploaded Successfully');
    }
}
