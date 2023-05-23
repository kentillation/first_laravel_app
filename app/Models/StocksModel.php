<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StocksModel extends Model
{
    use HasFactory;

    protected $table = "tbl_stocks";

    protected $fillable = ['name', 'description', 'price', 'availability', 'remaining', 'date_sold_out', 'date_update_stock'];
}
