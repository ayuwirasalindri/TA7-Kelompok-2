<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Bag.php (Model Bag)

class Bag extends Model
{
    protected $fillable = ['product_name', 'product_price'];

    // Tambahkan relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_name', 'name');
    }
}




