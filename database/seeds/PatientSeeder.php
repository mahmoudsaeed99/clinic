<?php

use Illuminate\Database\Seeder;
use App\Patient;
class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
           'name'=>'ahmed',
           'age'=>22,
           'totalMoney'=>2000,
           'paidMoney'=>1000,
           'mobile'=>"01117858476",
           'note'=>"i am a new patient in the clinic",
           'heart'=>1,
           'diabetes'=>1,
           'allergy'=>1,
           'bleed'=>1
           

        ]);
        Patient::create([
            'name'=>'sameh',
            'age'=>25,
            'totalMoney'=>15000,
            'paidMoney'=>10000,
            'mobile'=>"011177755",
            'note'=>"i am a new patient in the clinic",
            'heart'=>1,
            'diabetes'=>1,
            'allergy'=>1,
            'bleed'=>1,
            
 
         ]);
         Patient::create([
            'name'=>'mariem',
            'age'=>30,
            'totalMoney'=>4000,
            'paidMoney'=>2000,
            'mobile'=>"0111112222",
            'note'=>"i am a new patient in the clinic",
            'heart'=>1,
            'diabetes'=>1,
            'allergy'=>1,
            'bleed'=>1,
            
 
         ]);
         Patient::create([
            'name'=>'ayman',
            'age'=>60,
            'totalMoney'=>6000,
            'paidMoney'=>300,
            'mobile'=>"0100265548",
            'note'=>"i am a new patient in the clinic",
            'heart'=>1,
            'diabetes'=>1,
            'allergy'=>1,
            'bleed'=>1,
            
 
         ]);
         Patient::create([
            'name'=>'ahmed',
            'age'=>30,
            'totalMoney'=>5000,
            'paidMoney'=>1000,
            'mobile'=>"01001667259",
            'note'=>"i am a new patient in the clinic",
            'heart'=>0,
            'diabetes'=>1,
            'allergy'=>0,
            'bleed'=>1,
           
         ]);
         Patient::create([
            'name'=>'sayd',
            'age'=>50,
            'totalMoney'=>2500,
            'paidMoney'=>500,
            'mobile'=>"010033300",
            'note'=>"i am a new patient in the clinic",
            'heart'=>"1",
            'diabetes'=>1,
            'allergy'=>1,
            'bleed'=>1,
           
 
         ]);
    }
}
