<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'table_massages';

    protected $fillable = ['content', 'sender_id', 'recipient_id'];

    public $timestamps = false;

}
