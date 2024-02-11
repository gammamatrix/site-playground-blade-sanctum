<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->runCustom();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    /**
     * Run the custom database seeds.
     *
     * @return void
     */
    public function runCustom()
    {
        $seeds = [];
        $matches = [];

        $seeders = scandir('./database/seeders');
        if (is_array($seeders)) {
            foreach ($seeders as $filename) {
                if (preg_match('/^(Custom.*TableSeeder)\.php$/', $filename, $matches)) {
                    $seeds[] = $matches[1];
                }
            }
        }

        foreach ($seeds as $seed) {
            $this->call(sprintf('\Database\Seeders\%1$s', $seed));
        }
    }
}
