<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
  public function add_medicine()
  {
      return view('admin.medicine.add_medicine');
  }

  public function medicine_list()
  {
      return view('admin.medicine.medicine_list');
  }

  public function medicine_category()
  {
      return view('admin.medicine.medicine_category');
  }

  public function add_category()
  {
      return view('admin.medicine.add_category');
  }
}
