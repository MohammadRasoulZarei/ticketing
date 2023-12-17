<?php

namespace App\Models;

use App\Models\Department;
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
        return $this->belongsTo(Department::class);
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
}
