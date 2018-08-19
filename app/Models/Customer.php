<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Customer
*/
class Customer extends Model
{
    protected $table = 'customer';

    protected $primaryKey = 'customer_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'image',
        'sort',
    ];

    protected $guarded = [];
    public function services()
    {
      return $this->belongsToMany('App\Models\Services', 'customer_services',  'customer_id','services_id');

    }
}
