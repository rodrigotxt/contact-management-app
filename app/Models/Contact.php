<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = ['name', 'contact', 'email'];

    public function update($attributes = [], $options = []){
        return parent::update($attributes, $options);
    }
    
}
