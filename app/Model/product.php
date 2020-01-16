<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;


class product extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'receive_product');
    }
}
