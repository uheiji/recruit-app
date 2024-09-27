<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\Company;
use App\Models\Staff;
use App\Models\Work;
use App\Models\Resume;
use App\Models\Entry;
use App\Models\Favorite;
use App\Models\Tag;
use App\Models\WorkTag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Admin::factory(5)->create();
        Company::factory(5)->create();
        User::factory(5)->create();
        Staff::factory(5)->create();
        Work::factory(10)->create();
        Resume::factory(10)->create();
        Entry::factory(5)->create();
        Favorite::factory(5)->create();
        Tag::factory(5)->create();
        WorkTag::factory(5)->create();

    }
}
