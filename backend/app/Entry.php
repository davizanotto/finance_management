<?php

# app/Entry.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['description','value','payment_date','paid','active','created_at'];

}
