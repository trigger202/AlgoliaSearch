<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class article extends Model
{
 use searchable;


 public function searchableAs()
 {
   return "articles_index";
 }

 public function toSearchableArray()
 {
   return $this->toArray();
 }
}
