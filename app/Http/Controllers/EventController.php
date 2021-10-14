<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('events.create');
    }
    public function products(){
        return view('/products');
    }
    public function productsId($id){
        return view('product', ['id' => $id]);
    }
    public function contact(){
        return view('/contact');
    }
    public function login(){
        return view('/login');
    }
}
