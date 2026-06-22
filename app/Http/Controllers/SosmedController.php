<?php

namespace App\Http\Controllers;
use App\Models\Sosmed; 
use App\Models\Contact; 
use App\Models\Gallery; 
use App\Models\About;
use App\Models\Team;  

class SosmedController extends Controller
{
    public function index()
    {   
        $data_sosmed = Sosmed::get();
        $data_contact = Contact::get();
        $data_team = Team::get();
        $data_gallery = Gallery::get();
        $data_about = About::get();
        
        return view('index', compact('data_sosmed', 'data_contact', 'data_team', 'data_gallery', 'data_about'));
    }
}
