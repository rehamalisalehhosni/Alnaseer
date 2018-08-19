<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class OurProcess
*/
class OurProcess extends Model
{
    protected $table = 'our_process';

    protected $primaryKey = 'our_process_id';

    public $timestamps = true;

    protected $fillable = [
        'content',
        'image',
    ];
    protected $guarded = [];
}
