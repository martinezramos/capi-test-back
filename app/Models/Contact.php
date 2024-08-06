<?php

namespace App\Models;

use Database\Factories\ContactFactory;
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
    public function addresses()
    {
        return $this->hasMany(Address::class, 'contact_id');
    }

    /**
     * Get the email
     */
    public function emails()
    {
        return $this->hasMany(Email::class, 'contact_id');
    }

    /**
     * Get the email
     */
    public function phones()
    {
        return $this->hasMany(Phone::class, 'contact_id');
    }

    protected static function newFactory()
    {
        return ContactFactory::new();
    }
}
