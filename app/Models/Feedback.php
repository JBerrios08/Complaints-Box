<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_type',
        'branch',
        'message',
        'customer_name',
        'contact',
        'ticket_status',
    ];
}
