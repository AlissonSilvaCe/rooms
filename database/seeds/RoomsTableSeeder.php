<?php

use App\Models\Rooms;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $rooms;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRooms();
    }

    public function createRooms()
    {
    	Rooms::create([
            'number' => 1, 
        ]);

        Rooms::create([
            'number' => 2, 
        ]);
        
        Rooms::create([
            'number' => 3, 
        ]);
        
        Rooms::create([
            'number' => 4, 
        ]);
        
        Rooms::create([
            'number' => 5, 
        ]);

        Rooms::create([
            'number' => 6, 
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Rooms created');
    }
}
