<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = '04-komentar';
    public $timestamps = false;

    public function artikel() {
        return $this->belongsTo(Artikel::class, 'id_artikel', 'id');
    }
}
