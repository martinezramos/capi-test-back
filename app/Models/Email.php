<?php

namespace App\Models;

use Database\Factories\EmailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'email';
    protected $fillable = ['email', 'contact_id'];

    protected static function newFactory()
    {
        return EmailFactory::new();
    }

}
