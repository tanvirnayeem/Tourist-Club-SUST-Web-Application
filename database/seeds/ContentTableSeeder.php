<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Content;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ContentTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        // Events
        Event::create(['name' => 'Tourist Club SUST Freshers Receiption & Farewell',
        				'description' => "শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের একমাত্র ভ্রমণবিষয়ক সংগঠন 'ট্যুরিস্ট ক্লাব সাস্ট'' আগামী ১০ মার্চ ক্লাবের নবীন সদস্যদের অভ্যর্থনা এবং প্রবীন সদস্যদের বিদায়ী সংবর্ধনা আয়োজন করতে যাচ্ছে। উক্ত অনুষ্ঠানে ক্লাবের সকল মেম্বার ও শুভাকাঙ্ক্ষীরা সাদরে আমন্ত্রিত",
        				'date' => '10-03-2017',
        				'place' => 'SUST'
        				]);
        // about us content 
        // Content::create(['about_us' => 'Our objective is to promote activities of science, expose recent scientific information to students and to encourage students about science. We are committed to popularize science among young people. To accomplish this job we arrange different types of exposition programs like poster exhibition, science lecture, writing competition, organize seminar, conference, science Fair, quiz competition, debate competition, exhibition on science, study circle, talk show, Sudoku competition, publish Magazine, journal, celebrate science day, science week, establish science library, science talk, participating in social activities.'
        // 	]);

        // Other Contents 
        

    }
}
