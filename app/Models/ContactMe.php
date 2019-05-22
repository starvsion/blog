<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class ContactMe extends Model
{
    use SoftDeletes, HasTimestamps;

    protected $table = 'contact_me';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    protected $dates = [
        'read_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
