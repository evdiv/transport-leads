<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }


    public function about()
    {
        return view('pages.about');
    }


    public function store() 
    {
        return view('pages.contact');
    }


    public function selectService()
    {
        return view('pages.select-service');
    }

}
