<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcePOController extends Controller
{
    public function index()
    {
        return "HI I am inside index function of resource controller";
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        return "HI I am inside show function of resource controller and id is : " . $id;   
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
