<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cl = [
            [
                'last_name' => 'Aurestila',
                'first_name' => 'Louie Jay',
                'middle_name' => 'Gonzaga',
                'address' => 'Purok 2. Cawayanan, Tubigon, Bohol',
                'birth_date' => '2002-10-03',
                'phone_number' => '09099281877',
                'email' => 'louiejayaurestila@gmail.com',
                'initial_deposit' => 30000
            ],
            [
                'last_name' => 'Roronoa',
                'first_name' => 'Zoro',
                'middle_name' => 'Santuryo',
                'address' => ' Wano, Philippines',
                'birth_date' => '1982-1-09',
                'phone_number' => '09099281867',
                'email' => 'louiejayaurestila@gmail.com',
                'initial_deposit' => 30000
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Olando',
                'address' => 'Inabangga, Bohol',
                'birth_date' => '2001-04-08',
                'phone_number' => '09099281867',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name'         => 'Pelayre',
                'first_name'        => 'Lovely Jane',
                'middle_name'       => 'Bongcales',
                'address'           => 'Tubigon, Bohol',
                'birth_date'        => '2001-12-10',
                'phone_number'      => '09071731450',
                'email'             => 'lovelyjanepelayre@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Mueblas',
                'first_name'        => 'Marklister',
                'middle_name'       => 'Lauron',
                'address'           => 'tinangnan, Bohol',
                'birth_date'        => '2002-09-02',
                'phone_number'      => '09099281888',
                'email'             => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Villarmia',
                'first_name'        => 'Acejoy',
                'middle_name'       => 'Mejares',
                'address'           => 'Batasan, Bohol',
                'birth_date'        => '2001-11-13',
                'phone_number'      => '09092818677',
                'email'             => 'acejoygwapo123@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name' => 'Sacedon',
                'first_name' => 'Christian',
                'middle_name' => 'Roluna',
                'address' => 'Purok 3. Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-11-13',
                'phone_number' => '09685326466',
                'email' => 'sacedonchristian@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Pelayre',
                'first_name' => 'Sweet',
                'middle_name' => 'Bongcales',
                'address' => 'Tubigon, Japan',
                'birth_date' => '2001-109-18',
                'phone_number' => '09099281888',
                'email' => 'weetiepelayre@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name'         => 'Tirambolo',
                'first_name'        => 'Jackelyn',
                'middle_name'       => 'Detalla',
                'address'           => 'Cabulijan, Tubigon, Bohol',
                'birth_date'        => '1998-03-015',
                'phone_number'      => '0099281899',
                'email'             => 'tirambolojackelyn@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Flores',
                'first_name'        => 'Rosalino',
                'middle_name'       => 'Mecha',
                'address'           => 'Bakong, Bohol',
                'birth_date'        => '2001-09-05',
                'phone_number'      => '09463743474',
                'email'             => 'fross0988@gmail.com',
                'initial_deposit'   => 10000
            ],


        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
