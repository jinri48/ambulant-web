<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('pages.login');
    }

    public function home(){
        return view('pages.home');
    }

    public function subCategory(){
        return view('pages.sub-category');
    }

    public function products(){
        return view('pages.products');
    }

    public function product(){
        return view('pages.product');
    }

    public function myOrder(){
        return view('pages.my-order');
    }

    public function pendingOrder(){
        return view('pages.pending-order');
    }

    public function completedOrder(){
        return view('pages.completed-order');
    }

    public function editOrder(){
        return view('pages.edit-order');
    }

    public function claiming(){
        return view('pages.claiming');
    }

    public function tables(){
        return view('pages.tables');
    }

    public function guestSelection(){
        return view('pages.guest-selection');
        
    }
    public function tableSelection(){
        return view('pages.table-selection');
    }
    public function tablecapacity($guest_no){
        return view('pages.table-capacity');
    }
    
}
