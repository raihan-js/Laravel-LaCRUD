<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;

use Database\Factories\TeacherFactory;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Teacher::factory(10)->create();
        
        Student::create([
            'name'      => 'John Doe',
            'email'     => 'jdoe@mail.com',
            'phone'     => '01898765456',
            'department'    => 'EEE',
            'gender'    => 'Male',
            'photo'     => 'avatar.png',
            'courses'   => json_encode(['React', 'Remix']),
        ]);
        Student::create([
            'name'      => 'Bryan Fox',
            'email'     => 'bfox@mail.com',
            'phone'     => '01828765456',
            'department'    => 'CSE',
            'gender'    => 'Male',
            'photo'     => 'avatar.png',
            'courses'   => json_encode(['React', 'Remix']),
        ]);
        Student::create([
            'name'      => 'Anthony Hopkins',
            'email'     => 'ahope@mail.com',
            'phone'     => '01849765456',
            'department'    => 'EEE',
            'gender'    => 'Female',
            'photo'     => 'avatar.png',
            'courses'   => json_encode(['React', 'Remix']),
        ]);
    }
}
