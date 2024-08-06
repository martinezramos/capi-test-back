<?php

namespace App\Models;

use Database\Factories\PhoneFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phone';
    protected $fillable = ['phone_number', 'contact_id'];

    protected static function newFactory()
    {
        return PhoneFactory::new();
    }
}
