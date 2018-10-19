<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Person extends Model
{
    protected $table = 'persons';
    use Searchable;

    public $timestamps = false;

  /**
   * Get the index name for the model.
   *
   * @return string
   */
  public function searchableAs()
  {
    return 'people_index';
  }


  public function toSearchableArray()
  {
    return $this->toArray();
  }
}
