<?php

namespace DGTournaments\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('pages.checkout.checkout');
    }
}
