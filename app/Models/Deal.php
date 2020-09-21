<?php

namespace App\Models;
use App\Models\ModelsRemark;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function remark() {
        return $this->belongsTo(Remark::class,'remark','name');
    }
}
