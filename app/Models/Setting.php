<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Setting
*/
class Setting extends Model
{
    protected $table = 'setting';

    protected $primaryKey = 'setting_id';

    public $timestamps = true;

    protected $fillable = [
        'lat',
        'long',
        'email',
        'tel',
        'address',
        'company_name',
        'logo',
    ];
    protected $guarded = [];
}
