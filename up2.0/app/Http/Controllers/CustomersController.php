<?php

namespace App\Http\Controllers;

use App\Customers;

class CustomersController extends Controller
{
    
    public function index(){
    	$customers = Customers::all();

    	return view('Customers.index', compact('customers'));
    }
 
    public function show($id){

    	$customer = Customers::find($id);

    	return view('Customers.show', compact('customer'));
	}

	public function create(){
		return view('Customers.create');
	}
}
