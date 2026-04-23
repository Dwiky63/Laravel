<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'products';

   protected $fillable = [
       'product_name',
       'price',
       'desc',
       'image',
       'created_by'
   ];
   public function author()
   {
       return $this->belongsTo(User::class, 'created_by');
   }

}
