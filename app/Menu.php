<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
      protected $fillable = ['nama', 'harga','slug', 'artikel_id', 'menu_id'];
      public $timestamps = true;
       public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikel_menus', 'menu_id', 'artikel_id');
    }
      public function getRouteKeyName()
    {
        return 'slug';
    }
}
