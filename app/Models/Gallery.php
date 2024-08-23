<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'title',
        'body',
        'status',
    ];

    public function galleryasset() {
        return $this->hasMany(GalleryAsset::class);
    }
}
