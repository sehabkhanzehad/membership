<?php

namespace App\Models;

use App\Enums\Month;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $casts = [
        'month' => Month::class,
    ];

    protected $guarded = ['id'];

    public function collector()
    {
        return $this->belongsTo(User::class, 'collected_by');
    }

    public function member()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
