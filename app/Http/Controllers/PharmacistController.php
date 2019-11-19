<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
  public function add_prescription()
    {
        return view('pharmacist.add_prescription');
    }
    public function view_prescription()
      {
          return view('pharmacist.view_prescription');
      }
}
