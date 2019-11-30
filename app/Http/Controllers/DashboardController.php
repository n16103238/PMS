<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
  public function admin_dashboard()
  {
      return view('dashboard.admin_dashboard');
  }

public function pharmacist_dashboard()
  {
      return view('dashboard.pharmacist_dashboard');
  }



  /*
  public function denied()
  {
      return view('auth.permissiondenied');
  }  */






}
