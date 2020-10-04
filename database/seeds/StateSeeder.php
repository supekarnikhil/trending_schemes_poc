<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')-> insert([
            [
                'name' => 'Andaman and Nicobar Islands',
                'id' => '35',
                'state_code' => 'AN'
            ],
            [
                'name' => 'Andhra Pradesh',
                'id' => '28',
                'state_code' => 'AP'
            ],
            [
                'name' => 'Andhra Pradesh (New)',
                'id' => '37',
                'state_code' => 'AD'
            ],
            [
                'name' => 'Arunachal Pradesh',
                'id' => '12',
                'state_code' => 'AR'
            ],
            [
                'name' => 'Assam',
                'id' => '18',
                'state_code' => 'AS'
            ],
            [
                'name' => 'Bihar',
                'id' => '10',
                'state_code' => 'BH'
            ],
            [
                'name' => 'Chandigarh',
                'id' => '04',
                'state_code' => 'CH'
            ],
            [
                'name' => 'Chattisgarh',
                'id' => '22',
                'state_code' => 'CT'
            ],
            [
                'name' => 'Dadra and Nagar Haveli',
                'id' => '26',
                'state_code' => 'DN'
            ],
            [
                'name' => 'Daman and Diu',
                'id' => '25',
                'state_code' => 'DD'
            ],
            [
                'name' => 'Delhi',
                'id' => '07',
                'state_code' => 'DL'
            ],
            [
                'name' => 'Goa',
                'id' => '30',
                'state_code' => 'GA'
            ],
            [
                'name' => 'Gujarat',
                'id' => '24',
                'state_code' => 'GJ'
            ],
            [
                'name' => 'Haryana',
                'id' => '06',
                'state_code' => 'HR'
            ],
            [
                'name' => 'Himachal Pradesh',
                'id' => '02',
                'state_code' => 'HP'
            ],
            [
                'name' => 'Jammu and Kashmir',
                'id' => '01',
                'state_code' => 'JK'
            ],
            [
                'name' => 'Jharkhand',
                'id' => '20',
                'state_code' => 'JH'
            ],
            [
                'name' => 'Karnataka',
                'id' => '29',
                'state_code' => 'KA'
            ],
            [
                'name' => 'Kerala',
                'id' => '32',
                'state_code' => 'KL'
            ],
            [
                'name' => 'Lakshadweep Islands',
                'id' => '31',
                'state_code' => 'LD'
            ],
            [
                'name' => 'Madhya Pradesh',
                'id' => '23',
                'state_code' => 'MP'
            ],
            [
                'name' => 'Maharashtra',
                'id' => '27',
                'state_code' => 'MH'
            ],
            [
                'name' => 'Manipur',
                'id' => '14',
                'state_code' => 'MN'
            ],
            [
                'name' => 'Meghalaya',
                'id' => '17',
                'state_code' => 'ME'
            ],
            [
                'name' => 'Mizoram',
                'id' => '15',
                'state_code' => 'MI'
            ],
            [
                'name' => 'Nagaland',
                'id' => '13',
                'state_code' => 'NL'
            ],
            [
                'name' => 'Odisha',
                'id' => '21',
                'state_code' => 'OR'
            ],
            [
                'name' => 'Pondicherry',
                'id' => '34',
                'state_code' => 'PY'
            ],
            [
                'name' => 'Punjab',
                'id' => '03',
                'state_code' => 'PB'
            ],
            [
                'name' => 'Rajasthan',
                'id' => '08',
                'state_code' => 'RJ'
            ],
            [
                'name' => 'Sikkim',
                'id' => '11',
                'state_code' => 'SK'
            ],
            [
                'name' => 'Tamil Nadu',
                'id' => '33',
                'state_code' => 'TN'
            ],
            [
                'name' => 'Telangana',
                'id' => '36',
                'state_code' => 'TS'
            ],
            [
                'name' => 'Tripura',
                'id' => '16',
                'state_code' => 'TR'
            ],
            [
                'name' => 'Uttar Pradesh',
                'id' => '09',
                'state_code' => 'UP'
            ],
            [
                'name' => 'Uttarakhand',
                'id' => '05',
                'state_code' => 'UT'
            ],
            [
                'name' => 'West Bengal',
                'id' => '19',
                'state_code' => 'WB'
            ]
        ]);
    }
}
