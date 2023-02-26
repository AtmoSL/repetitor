<?php

namespace App\Models\Landing;

use App\Models\Landing\FeedBack\LandingFeedBackSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingReview extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'class',
        'subject_id',
        'photo_path',
        'text',
        'is_published'
    ];

    public function subject()
    {
        return $this->belongsTo(LandingFeedBackSubject::class);
        
    }
}
