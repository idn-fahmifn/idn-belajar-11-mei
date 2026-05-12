<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // definisikan tabel yang akan di connect kan.
    // jika tabelnya tersebut memiliki nama singular

    use HasFactory;
    protected $table = 'item';
    protected $fillable = [
        'item_name', 'stok', 'uuid', 'condition', 'desc'
    ]; 

}
