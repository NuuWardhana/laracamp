<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chekout extends Model
{
    use HasFactory;

    protected $fillable=['user_id','camp_id','card_number','expired','cvc'];
}