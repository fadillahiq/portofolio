<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'type', 'episode', 'genre', 'duration', 'link_480p_uptobox', 'link_480p_acefile', 'link_480p_googledrive', 'link_720p_uptobox', 'link_720p_acefile', 'link_720p_googledrive', 'link_1080p_uptobox', 'link_1080p_acefile', 'link_1080p_googledrive'
    ];
}
