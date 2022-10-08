<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class StockItem extends Model
    {

        use HasFactory;

        protected $table = "stock_items";

        protected $guarded = [];

        public function StockCategory() : BelongsTo {
            return $this->belongsTo(StockCategory::class);
        }

        public function getCategory() : string {
            return $this->StockCategory->category_name;
        }


    }
