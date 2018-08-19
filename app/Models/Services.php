<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Services
*/
class Services extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'services_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'image',
        'sort',
    ];

    protected $guarded = [];
    public function customers()
    {
        return $this->belongsToMany('App\Models\Customer', 'customer_services', 'customer_id','services_id');

    }


}
