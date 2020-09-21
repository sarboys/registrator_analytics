<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Remark extends Model
{
    public function deals() {
        return $this->hasMany(Deal::class,'remark','name');
    }
}
