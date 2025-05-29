<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneticTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'exam_id',
        'exam_type',
        'collection_date',
        'report',
    ];

    protected $casts = [
        'collection_date' => 'date',
    ];
}