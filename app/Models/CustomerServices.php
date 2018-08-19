<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class CustomerServices
*/
class CustomerServices	 extends Model
{
    protected $table = 'customer_services';

    protected $primaryKey = 'customer_services_id';

    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'services_id',
    ];

    protected $guarded = [];
}
