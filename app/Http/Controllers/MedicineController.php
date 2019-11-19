<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
  public function add_medicine()
  {
      return view('medicine.add_medicine');
  }

  public function medicine_list()
  {
      return view('medicine.medicine_list');
  }

  public function medicine_category()
  {
      return view('medicine.medicine_category');
  }

  public function add_category()
  {
      return view('medicine.add_category');
  }
}
