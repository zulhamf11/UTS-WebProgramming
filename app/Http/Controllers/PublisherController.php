<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisher()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    public function publisherDetail($id)
    {
        $publisher = Publisher::where('id', $id)->with('books')->first();
        return view('publisher_detail', compact('publisher'));
    }
}
