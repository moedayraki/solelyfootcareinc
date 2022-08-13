<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Insurance',
            'description' => 'Currently we only offer direct billing to Green Shield for diabetic in home advanced foot care clients only. A doctor’s note is required for first visit in order to be approved for this service. Receipt can be given upon request for all other insurance company submissions. Please note it is best to call your insurance company for all the specific details.
            '
        ]);
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Tax Income',
            'description' => 'Receipts available upon request for advanced foot care. Receipts cans be used at income tax time of a write off under medical.'
        ]);
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Cancelation Policy',
            'description' => 'We are committed to providing you with the highest quality foot care and therefore, it is important to keep your appointments. We have booked an appointment exclusively for you. We understand that sometimes events happen that require cancellation or rescheduling. We ask that you give a minimum of 24 hour notice if there needs to be a change in your appointment. If our nurses come out to your home or you do not show up to your appointment without calling ahead of time stating you are unavailable a fee of $35.00 will be added to your bill at your next appointment. If this is an ongoing issue your treatments will be terminated.'
        ]);
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Payment',
            'description' => 'We accept the following forms of payment for in home and clinic appointments: cash, debit, credit.'
        ]);
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Sterlization',
            'description' => 'Your safety is our TOP priority and therefore we have high standards for infection control. All equipment used is sterilized after each use or one time use instruments are discarded after care. Our sterilization procedure is as follows:

                .We start by using a cleaning solution to clean away any visible debris
                .We use an ultrasonic cleaner so ensure effective cleaning within all crevices.
                .We then package all our instruments in sterile pouches that contain a chemical indicator both on the package and inside the pouch.
                .We then place these packaged instruments into our steam autoclave.
                .Our autoclave reaches a heat of 273 degrees each cycle. This temperature ensures that all bacteria, spores, fungi and any other microorganisms have been killed.
                .The autoclave cycle is confirmed by a receipt like print out stating the temperature the autoclaved reached to complete sterilization. The receipt load number is labeled on each pouch from that cycle and documented into our sterilization log book for reference if needed.
                .This entire process is Public Health Approved'
        ]);
    }
}
