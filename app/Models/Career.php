<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';

   protected $fillable = [
       'job-title',
       'requirement',
       'created_by'
   ];
   public function author()
   {
       return $this->belongsTo(User::class, 'created_by');
   }

}
