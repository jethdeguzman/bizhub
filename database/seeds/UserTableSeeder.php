<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'email' => 'wearhisword@gmail.com',
            'password' => bcrypt('1234'),
            'firstname' => 'Cris',
            'lastname' => 'Flores',
            'company_name' => 'Wear His Word',
            'company_slug' => 'wear-his-word',
            'company_logo' => 'assets/images/products/wear-his-word/wearhisword.jpg',
            'type' => 1,
            'address' => '18 Santan, Fortune, Marikina City',
            'contact_number' => '09355410254',
            'contact_person' => 'Cris Flores',
            'contact_email' => 'crisflores@gmail.com'
        ]);


        App\User::create([
            'email' => 'cpoint@gmail.com',
            'password' => bcrypt('1234'),
            'firstname' => 'Mark Anthony',
            'lastname' => 'Muya',
            'company_name' => 'C Point',
            'company_slug' => 'c-point',
            'company_logo' => 'assets/images/products/cpoint/cpoint.jpg',
            'type' => 1,
            'address' => '23 Dome St, Caloocan City',
            'contact_number' => '998-1877',
            'contact_person' => 'Del De Guzman',
            'contact_email' => 'ddeguzman@gmail.com'
        ]);

        App\User::create([
            'email' => 'clothingshop@gmail.com',
            'password' => bcrypt('1234'),
            'firstname' => 'Diana',
            'lastname' => 'Dela Cruz',
            'company_name' => 'Clothing Shop',
            'company_slug' => 'clothing-shop',
            'company_logo' => 'assets/images/products/clothing-shop/clothingshop.jpg',
            'type' => 1,
            'address' => '2014 Strata 100, Ortigas, Pasig City',
            'contact_number' => '875-8521',
            'contact_person' => 'Marshall Walker',
            'contact_email' => 'mwalker@gmail.com'
        ]);

        App\User::create([
            'email' => 'jessicavalero@gmail.com',
            'password' => bcrypt('1234'),
            'firstname' => 'Jessica',
            'lastname' => 'Valero',
            'company_name' => 'Jessica Valero Online Shop',
            'company_slug' => 'jessica-valero-online-shop',
            'company_logo' => 'assets/images/products/onlineshop.jpg',
            'type' => 2,
            'address' => '18 Rosario St, San Pablo, Taguig City',
            'contact_number' => '09156809880',
            'contact_person' => 'Joanne Valero',
            'contact_email' => 'jvalero@gmail.com'
        ]);
    }
}
