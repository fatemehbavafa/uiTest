<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $parents = [
            'سن',
            'نوع وبسایت',
            'شغل',
            'علاقه مندی ها',
        ];

        foreach ($parents as $parent) {
            Tag::create([
                'title' => $parent,
                'parent_id' => 0
            ]);
        }

        $ages = [
            '0-18',
            '19-39',
            '40-59',
            '60 به بالا'
        ];

        foreach ($ages as $age) {
            Tag::create([
                'title' => $age,
                'parent_id' => config('env.age')
            ]);
        }

        $types = [
            'خبری',
            'فروشگاهی',
            'آموزشی',
            'شرکتی',
            'وبلاگی و شخصی',
            'چند منظوره'
        ];

        foreach ($types as $type) {
            Tag::create([
                'title' => $type,
                'parent_id' => config('env.type')
            ]);
        }

        $jobs = [
            'فنی، مهندسی و صنعتی',
            'معماری، عمران و ساختمانی',
            'اداری و مدیریت',
            'مالی، حسابداری و حقوقی',
            'بازاریابی و فروش',
            'آموزشی',
            'هنری و رسانه',
            'درمانی، بهداشت و زیبایی',
            'فروشگاه،اغذیه و رستوران',
            'خدمات',
            'خانه دار',
            'شغل آزاد',
        ];

        foreach ($jobs as $job) {
            Tag::create([
                'title' => $job,
                'parent_id' => config('env.job')
            ]);
        }

        $interests=[
            'کامپیوتر و تکنولوژی',
            'برنامه نویسی',
            'برق و مکانیک',
            'معماری و عمران',
            'پزشکی',
            'فلسفه و روان شناسی',
            'حقوق',
            'اقتصاد',
            'سیاست',
            'زبان و ادبیات',
            'تاریخی و فرهنگی',
            'مذهبی',
            'هنر',
            'فیلم و سینما',
            'موسیقی',
            'ورزشی',
            'زیبایی و سلامت',
            'آشپزی',
            'مد و فشن',
        ];

        foreach ($interests as $interest){
            Tag::create([
                'title'=>$interest,
                'parent_id'=>config('env.interest')
            ]);
        }


    }
}
