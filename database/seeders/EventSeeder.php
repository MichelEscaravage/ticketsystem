<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->title = 'NK Atletiek';
        $event->start_at = '2024-01-02';
        $event->end_at = '2024-03-02';
        $event->location = 'Breda';
        $event->description = 'Nationaal kampioenschap Atletiek';
        $event->price = '19.99';
        $event->save();


        $event = new Event();
        $event->title = 'WK bodybuilding';
        $event->start_at = '2025-01-02';
        $event->end_at = '2025-03-02';
        $event->location = 'Utrecht';
        $event->description = 'Wereld kampioenschap Bodybuilding';
        $event->price = '25.00';
        $event->save();
    }
}
