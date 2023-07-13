<?php

namespace App\Models;

use App\Models\User;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'years',
        'name',
        'archive',
        'url',
        // 'user_id',
        // 'created_at',
        // 'updated_at',
        // 'published',
        // 'published_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
        }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(
    //         related   : User::class,
    //         foreignKey: 'user_id',
    //     );
    // }

    public function places() {
        return $this->belongsToMany(Place::class);
    }

    
    
}
