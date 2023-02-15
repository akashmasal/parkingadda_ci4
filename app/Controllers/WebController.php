<?php

namespace App\Controllers;

class WebController extends BaseController
{
    public function index()
    {
        $data['page_title'] = "ParkingAdda || Park Like A Boss";
        $data['page'] = "website/pages/home";
        return view("website/partials/template",$data);
    }
    
}
