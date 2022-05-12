<?php

namespace App\Models;

class Listing
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'title' => 'Listing One',
        'description' => 'Lorem ipsum dolor sit amet, consect'
      ],
      [
        'id' => 2,
        'title' => 'Listing Two',
        'description' => 'Lorem ipsum dolor sit amet, consect'
      ],
      [
        'id' => 3,
        'title' => 'Listing three',
        'description' => 'Lorem ipsum dolor sit amet, consect'
      ],
      [
        'id' => 4,
        'title' => 'Listing Four',
        'description' => 'Lorem ipsum dolor sit amet, consect'
      ],
    ];
  }

  public static function find($id)
  {
    $listings = self::all();

    foreach ($listings as $listing) {
      if ($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}
