<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  public function add_invoice()
    {
        return view('invoice.add_invoice');
    }

  public function view_invoice()
      {
          return view('invoice.view_invoice');
      }
}
