<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_type extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    public function service_item(){
        return $this->hasMany(Service_item::class,'service_type_id');
    }
}
