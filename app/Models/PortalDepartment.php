<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortalDepartment extends Model
{
    protected $table = 'portal_department';
    protected $fillable = ['name','portal_id'];
    public $id;
    public $name;
    public $portal_id;
    public $timestamps = false;
}
