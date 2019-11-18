<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
  public function add_medicine()
  {
      return view('medicine.add_medicine');
  }
}
