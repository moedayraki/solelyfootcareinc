<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Advanced Foot Care',
            'description' => 'Treatment starts with an intake questionnaire followed by an initial assessment. If you are diabetic a monofilament test is required to assess for any loss of sensation/neuropathy concerns. The foot care nurse will start the procedure by cutting and filing nails, debride thick fungal nails, remove corns and calluses, hot towels (clinic only), therapeutic massage, give our best professional recommendations and referrals if necessary.',
            'length' => '1 hour or less',
            'cost' => '$55',
        ]);
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Basic Foot Care',
            'description' => 'Treatment is ideal for clients with no underlying issues and only requires a quick nail trim, file and minor callus removal.',
            'length' => 'up to 30 mins',
            'cost' => '$40',
        ]);
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Non-Surgical Ingrown Nail Removal',
            'description' => 'Treatment starts with your foot care nurse assessing the site, use podiatry equipment to alleviate pain and pressure caused by the ingrown nail. Instruments used may include nippers, file and burr. Please note this is a temporary solution and may be required every 2-6 weeks depending on your personal nail growth. Depending on the severity of your ingrown, your nurse may also refer you to your doctor for additional treatment.',
            'length' => 'up to 30 mins',
            'cost' => '$40',
        ]);
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'ONYFIX',
            'description' => 'Onyfix Nail Correcting system is a newly innovative German product that enables painless treatment of almost all forms of ingrown/Involuted toenails. Our foot care experts will adapt the system individually to your nail. This will allow your nail to regain the natural shape as it grows. This process is pain free both during and after application and is a GREAT alternative to surgical ingrown nail removal and not to mention more cost effective.

            .Pain free treatment
            .Rapid pain alleviation
            .Corrects nail through physiological nail growth
            .Effective without exerting force on the nail
            .Individually adaptable
            .No restrictions to patient activities (swimming/sauna)
            .Nail polish can still be used',
            'length' => 'up to 30 mins / up to 1.5 hours',
            'cost' => '$50 per toe / $40 for clinical visit',
        ]);
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Medical Pedicure',
            'description' => 'Our medical pedicure is a waterless treatment performed by an advanced foot care nurse who combines podiatry care with the added cosmetic care. Guaranteed to be hygienic and safe with zero cross contamination. During your medical pedicure the foot nurse will first examine your feet, followed by nail shaping, cuticle work and callus removal, finished with hot towels, therapeutic massage and polish.',
            'length' => 'up to 1 hour',
            'cost' => '$65 With Polish / $60 Without Polish',
        ]);
        DB::table('services')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'In Home Care',
            'description' => 'Advanced foot care is the only treatment available at this time for in home care. Services are available within Windsor Essex County, if you reside outside of this area please contact us.',
            'length' => 'up to 1 hour',
            'cost' => '$55'
        ]);
    }
}
