<?php

use Illuminate\Database\Seeder;
use App\student;

class StudentTabeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $student1 = new Student;
        // // mgmg
        // $student1->name="ka ka";
        // $student1->email="kaka@gmail.com";
        // $student1->address="Bahan";
        // $student1->save();

        // $student2 = new Student;
        // $student2->name="Mya Mya";
        // $student2->email="myamya@gmail.com";
        // $student2->address="latha";
        // $student2->save();

        factory(App\student::class, 10)->create();
    }
}
