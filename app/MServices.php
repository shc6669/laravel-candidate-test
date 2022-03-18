<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MServices extends Model
{
    use HasFactory;

    protected $table = "m_services";

    protected $fillable = ['name', 'price'];

    protected $guarded = [];
}
