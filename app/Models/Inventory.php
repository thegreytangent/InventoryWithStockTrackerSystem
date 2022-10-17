<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use mysql_xdevapi\CollectionModify;

class Inventory extends Model
{
    use HasFactory;

    protected $table = "inventories";

    protected $guarded = [];


    public function getDate(): string {
        return $this->created_at->format('F d, Y');
    }

    public function getQty() : int {
        return $this->qty;
    }

    public function StockItem() : HasOne {
        return $this->hasOne(StockItem::class);
    }

    public function balance() : int {
        return 0;
    }



}
