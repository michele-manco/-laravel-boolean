<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view('home');
  }
  public function faq() {
    $data = [
      'lista_faq_sx' => config('dati.faqs_sx'),
      'lista_faq_dx' => config('dati.faqs_dx')

    ];
    return view('faq', $data);
  }

}
