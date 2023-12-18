<?php

namespace App\Models;

use App\Models\User;
use App\Models\Message;
use App\Models\Department;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory,SoftDeletes;
    protected $tabel='tickets';
    protected $guarded=[];
    protected $apends=['status_value'];

    public function department() {
        return $this->belongsTo(Department::class)->withTrashed();
    }
    public function getStatusValueAttribute(){
        switch ($this->status) {
            case 'closed':
                return 'تکمیل شده';
                break;
            case 'unanswered':
                return 'بی جواب';
                break;
            case 'answered':
                return 'پاسخ داده شده';
                break;
            case 'checking':
                return 'درحال بررسی';
                break;
        }
    }
    public function getPriorityValueAttribute(){
        switch ($this->priority) {
            case 'top':
                return 'بالا';
                break;
            case 'mid':
                return 'متوسط';
                break;
            case 'low':
                return 'پایین';
                break;
        }
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function scopeFilter($query) {
        if (request()->has('priority')) {
                $query->where('priority',request('priority'));
        }
        if (request()->has('status')) {
                $query->where('status',request('status'));
        }
        if (request()->has('order')) {
            switch (request('order')) {
                case 'newest':
                  $query->latest();
                    break;
                case 'oldest':
                    $query->oldest();
                    break;

            }
        }else{
            $query->latest();
        }

        return $query;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
