<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory,SoftDeletes;
    protected $tabel='messages';
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
