<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Medicines;
class MedicineController extends Controller
{
  public function add_medicine()
  {
    $categories = Category::all();
      return view('admin.medicine.add_medicine',compact('categories'));
  }
//Add Medicine
  public function create_medicine(Request $request)
  {
          Medicines::create([
             'name' =>$request-> name,
             'category_id' =>$request-> category_id,
             'purchase_price' =>$request-> purchase_price,
             'selling_price' =>$request-> selling_price,
             'quantity' =>$request-> quantity,
             'generic_name' =>$request-> generic_name,
             'company' =>$request-> company,
             'effects' =>$request-> effects,
             'expiry_date' =>$request-> expiry_date,

          ]);
    return back()->with('success','Medicine added sucessfully');
  }

  public function medicine_list()
  {
    $medicines = Medicines::all();
      return view('admin.medicine.medicine_list',compact('medicines'));
  }


//Add Category
  public function medicine_category()
      {
        $categories = Category::all();
          return view('admin.medicine.medicine_category',compact('categories'));
      }


  public function add_category()
  {
      return view('admin.medicine.add_category');
          }

          function create(Request $request) {
            Category::create([
               'name' =>$request-> name,
               'description' =>$request-> description,
             ]);
             return back()->with('success','Medicine Category added sucessfully');
          }
 }
