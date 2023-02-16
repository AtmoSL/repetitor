<?php

namespace App\Models\Landing\FeedBack;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingFeedBack extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'class_id',
        'subject_id',
        'target_id',
        'contacts',
        'format_id',
        'status_id',
    ];

    public function class()
    {
        return $this->belongsTo(LandingFeedBackClass::class);
    }

    public function subject()
    {
        return $this->belongsTo(LandingFeedBackSubject::class);
    }

    public function target()
    {
        return $this->belongsTo(LandingFeedBackTarget::class);
    }

    public function format()
    {
        return $this->belongsTo(LandingFeedBackFormat::class);
    }

    public function status()
    {
        return $this->belongsTo(LandingFeedBackStatus::class);
    }
}
