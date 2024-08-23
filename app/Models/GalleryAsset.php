<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAsset extends Model
{
    use HasFactory;

    protected $table = 'galleryassets';

    protected $fillable = [
        'asset',
        'type',
        'status',
    ];

    public function gallery() {
        return $this->belongsTo(Gallery::class);
    }
}
