<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_unique_id',
        'profile_photo',
        'phone',
        'date_of_birth',
        'gender',
        'address',
        'city',
        'state',
        'country',
        'license_no',
    ];

    /**
     * Automatically generate a unique 5-digit user_unique_id before creating.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($profile) {
            do {
                $uniqueId = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
            } while (self::where('user_unique_id', $uniqueId)->exists());

            $profile->user_unique_id = $uniqueId;
        });
    }

    /**
     * Relation to User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}