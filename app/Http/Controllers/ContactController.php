<?php

namespace App\Http\Controllers;
use App\Models\Sosmed; 
use App\Models\Contact; 
use Illuminate\Http\Request;
use Illuminate\View\View;
class ContactController extends Controller
{
    public function index()
    {   
        $data = Contact::get();
        return view('index', compact('data'));
    }
}
