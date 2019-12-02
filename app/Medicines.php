<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Medicines extends Model
{
  protected $fillable = [
       'name',
       'category_id',
       'purchase_price',
       'selling_price',
       'quantity',
       'generic_name',
       'company',
       'effects',
       'expiry_date',

   ];
   
   function categories()
    {
      return $this->hasOne('App\Category','id','category_id');
    }
}
