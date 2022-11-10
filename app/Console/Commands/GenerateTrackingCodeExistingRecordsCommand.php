<?php

    namespace App\Console\Commands;

    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\DB;

    class GenerateTrackingCodeExistingRecordsCommand extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'x:GenerateTrackingCode';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Generate tracking code for existing items';


        public function handle(): int
        {

            $items = DB::table('stock_items')->get();

            $i = 1;
           foreach ($items as $item) {
               $or = (str_pad($i, 4, '0', STR_PAD_LEFT));

               DB::table('stock_items')->where(['id' => $item->id])->update([
                    'track_code' => 'OR-' . $or
               ]);
               $i++;
           }

            return 0;
        }
    }
