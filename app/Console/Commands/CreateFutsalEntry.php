<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Futsal;

class CreateFutsalEntry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'futsal:create-dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a dummy futsal entry with ID 1 for testing purposes.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Futsal::unguard(); // Temporarily disable mass assignment protection

        $futsal = Futsal::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Dummy Futsal 1',
                'description' => 'This is a dummy futsal created for testing the details page.',
                'price' => 1500.00,
                'image' => '/Asset/image/bfit.jpg', // Use an existing image path
                'thumbnail' => '/Asset/image/bfit.jpg', // Use an existing image path
                'amenities' => [
                    ['icon' => 'bi-wifi', 'name' => 'WiFi'],
                    ['icon' => 'bi-droplet', 'name' => 'Shower'],
                ],
                'pricing' => [
                    'weekday' => 1500,
                    '4PM-7PM' => 1800,
                    'public_holidays_saturday' => 2000,
                ],
                'contact' => [
                    'phone' => '9876543210',
                    'location' => 'Kathmandu, Nepal',
                ],
                'is_active' => true,
            ]
        );

        Futsal::reguard(); // Re-enable mass assignment protection

        $this->info('Futsal entry with ID 1 has been created or updated.');
    }
}
