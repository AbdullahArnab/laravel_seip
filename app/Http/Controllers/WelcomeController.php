<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('frontEnd.home.homeContent');
    }
    public function category() {
        return view('frontEnd.category.categoryContent');
    }
    public function productDetails() {
         return view('frontEnd.product.productContent');
    }
    
}
















