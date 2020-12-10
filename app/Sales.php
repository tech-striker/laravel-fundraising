<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
	protected $table = 'sales';

	protected $fillable = ['manager', 'january','february','march','april','may','june'];
}
