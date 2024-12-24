<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationPublic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'employee_number', 'lucky_draw_number'];
}
