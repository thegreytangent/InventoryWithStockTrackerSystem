<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Facades\DB;

    class StockItem extends Model
    {

        use HasFactory;

        protected $table = "stock_items";

        protected $guarded = [];

        public function StockCategory(): BelongsTo
        {
            return $this->belongsTo(StockCategory::class);
        }

        public function Inventory(): HasMany
        {
            return $this->hasMany(Inventory::class);
        }

        public function getCategory(): string
        {
            return $this->StockCategory->category_name;
        }

        public function getBalance(): int
        {

            return $this->getTotalIn() - $this->getTotalOut();
        }

        public function getTotalOut(): int
        {
            $outs =  $this->Inventory()->where([
                'operation' => 'out'
            ])->get();
            $count = 0;
            foreach ($outs as $out) {
                $count += $out->qty;
            }

            return $count;
        }

        public function getTotalIn(): int
        {
            $outs =  $this->Inventory()->where([
                'operation' => 'in'
            ])->get();
            $count = 0;
            foreach ($outs as $out) {
                $count += $out->qty;
            }

            return $count;
        }

        public static function selectItems(): array
        {
            $result = [];
            $items = DB::table('stock_items')->get();

            foreach ($items as $item) {
                $result[$item->id] = $item->item_name;
            }

            return $result;
        }


    }
