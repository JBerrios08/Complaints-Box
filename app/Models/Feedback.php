<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // 1. Añade esta línea para forzar el nombre de la tabla
    protected $table = 'feedbacks';

    // 2. Mantén tu fillable que ya tenías
    protected $fillable = [
        'message_type',
        'branch',
        'message',
        'customer_name',
        'contact',
        'ticket_status',
    ];
}