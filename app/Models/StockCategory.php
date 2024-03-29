<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Facades\DB;

    class StockCategory extends Model
    {
        use HasFactory;

        protected $table = "stock_categories";

        protected $guarded = [];

        public function countTotalItems(): int
        {
            return $this->StockItems->count();
        }


        public function StockItems() : HasMany {
            return $this->hasMany(StockItem::class);
        }



        public static function selectList() : array {
            $result = [];
            $categories = DB::table('stock_categories')->get();

            foreach ($categories as $category) {
                $result[$category->id] = $category->category_name;
            }

            return $result;
        }


    }
