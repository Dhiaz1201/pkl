<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	  protected $fillable = ['name', 'slug', 'artikel_id', 'tag_id'];
      public $timestamps = true;
      public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikel_tags', 'tag_id', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
	{
		parent::boot();
		self::deleting(function($kategori) {
		// mengecek apakah penulis masih punya buku
		if ($kategori->artikel->count() > 0) {
		// menyiapkan pesan error
		$html = 'Tag tidak bisa dihapus karena masih memiliki artikel : ';
		$html .= '<ul>';
			foreach ($kategori->artikel as $data)
			{
				$html .= "<li>$data->judul</li>";
			}
			$html .= '</ul>';
			Session::flash("flash_notification", [
			"level"=>"danger",
			"message"=>$html
			]);
			// membatalkan proses penghapusan
			return false;
			}
		});
	}
}
