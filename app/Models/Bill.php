<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'bi_id';
    protected $keyType = 'string';

    protected $fillable = [
        'bi_id',
        'email',
        'bi_date',
        'tk_count',
        'bi_value'
    ];

    
    public function applydiscount(){
        return $this->hasMany(ApplyDiscount::class, 'bi_id', 'bi_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'email', 'email');
    }
}
