<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('globalData', (object)[
            'mainMenu'=>[
                (object)['name' => 'Home', 'route' => 'home'],
                (object)['name' => 'About Us', 'route' => 'about'],
                (object)['name' => 'Contact Us', 'route' => 'contact'],
                // (object)['name' => 'News', 'route' => 'blog'],
            ],
            'members' => [
                ['name'=>'Dr. Odhiambo Bati','description'=>'Doctor', 'image'=>'images/team/Dr_Odhiambo_Bati.png'],
                ['name'=>'Pricilla Okindo','description'=>'Environmentalist', 'image'=>'images/team/Priscilla_Okindo.png'],
                ['name'=>'Ronnie Midigo','description'=>'Health Researcher', 'image'=>'images/team/Ronnie_Midigo.png'],
                ['name'=>'Wilson Mosbey','description'=>'Medical Social Worker', 'image'=>'images/team/wilson_mosbey.png'],
            ],
            'events' => [
                (object)['title'=>'Visitation to patients homes', 'description'=>'We\'ll organize how to effectively coordinate visits', 'date'=>'12th June, 2022', 'venue'=>'Nairobi', 'image'=>'/images/care.jpg', 'category'=>'Training'],
                (object)['title'=>'Awareness Creation', 'description'=>'What do we do and how do we affect you?', 'date'=>'12th June, 2022', 'venue'=>'Nairobi', 'image'=>'/images/health.jpg', 'category'=>'Training'],
                (object)['title'=>'Fund Raising Ceremony', 'description'=>'We need to raise money for our
                            building project, please support us with prayer and means', 'date'=>'12th June, 2022', 'venue'=>'Nairobi', 'image'=>'/images/fund.jpg', 'category'=>'Training'],
                (object)['title'=>'Income generation seminar for cancer patients and their care givers', 'description'=>'Sourcing for means while at the same time caring for the sick is tiring...', 'date'=>'12th June, 2022', 'venue'=>'Nairobi', 'image'=>'/images/fund.jpg', 'category'=>'Training'],

            ]
        ]);

    }
}
