<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateCancelledReservations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-cancelled-reservations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiryTime = Carbon::now()->subHours(2); // تاريخ الانتهاء بعد ساعتين

        Reservation::whereNull('voucher_id')
            ->where('created_at', '<=', $expiryTime)
            ->update(['state_id' => 5]); // حالة الإلغاء

        $this->info('Cancelled reservations updated successfully.');
    }
}
