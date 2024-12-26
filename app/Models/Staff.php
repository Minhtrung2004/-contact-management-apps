<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;  // Dùng trait HasFactory để hỗ trợ Factory trong Laravel

    // Cột nào có thể gán hàng loạt (mass assignment)
    protected $fillable = [
        'name',
        'title',
        'academic_rank',
        'degree',
        'phone',
        'email',
        'department_id',
    ];

    /**
     * Mối quan hệ "Staff" thuộc về "Department"
     * Mỗi staff chỉ thuộc một department.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);  // Staff belongs to a Department
    }
}
