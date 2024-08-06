<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    protected $fillable = ['name'];

    /**
     * Get the adress
     */
    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Get the email
     */
    public function email(): HasMany
    {
        return $this->hasMany(Email::class);
    }

    /**
     * Get the email
     */
    public function phone(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
