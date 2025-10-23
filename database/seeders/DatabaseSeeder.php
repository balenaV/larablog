<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name'              => 'larablog',
            'email'             => 'larablogdev@gmail.com',
            'username'          => 'larablog',
            'password'          => bcrypt('12345'),
            'type'              => 2,
            'email_verified_at' => now(),
            'blocked'           => 0,
            'direct_publish'    => 1,
        ]);
    }
}
