<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'languages' => 'array',
        'interests' => 'array',
    ];

    /**
     * Get the user the profile is belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
