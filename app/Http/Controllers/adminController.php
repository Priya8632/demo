<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;



class adminController extends Controller
{
    function data($num = 2){

        $customer = Customer::paginate($num);
        // echo '<pre>';
        // print_r($customer);
        // echo '</pre>';
        return view('admin_dashboard',['records' => $customer]);
    }
}
