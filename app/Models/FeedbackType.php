<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackType extends Model
{
    const POSITIVE = 1;
    const NEUTRAL = 2;
    const NEGATIVE = 3;

    protected $table = 'feedback_types';

}
