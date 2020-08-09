<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseStudentSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(ActivitiesTestsTableSeeder::class);
        $this->call(StudentActivityTestSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
