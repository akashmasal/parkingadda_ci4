<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DashModel;

class DashController extends BaseController
{
    function index()
    {
        $data['page_title'] = "ParkingAdda || Login";
        return view("admin/pages/login", $data);
    }
    function register_view()
    {
        $data['page_title'] = "ParkingAdda || Register";
        return view("admin/pages/register", $data);
    }

    function register(){
        echo "<pre>";
        print_r($_POST);
        die;
        // $model = new DashModel();
        // $model->save(["user_name"=>$_POST['fullname']]);
    }

    function dashboard()
    {
        $data['page_title'] = "ParkingAdda || Admin Dashboard";
        $data['page'] = "admin/pages/dashboard";
        return view('admin/partials/template', $data);
    }
}