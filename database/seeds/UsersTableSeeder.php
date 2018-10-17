<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name'               => 'Md Sihab Uddin',
            'email'              => 'sihab.babl@gmail.com',
            'password'           => bcrypt('123456'),
            'username'           => 'sihab',
            'ration_id'          => 'RID1230001',
            'brash_no'           => 'B1230001',
            'police_id_no'       => 'PID4560001',
            'nid'                => '19917026613000210',
            'group'              => 'Gazetted',
            'father_name'        => 'Md Nizam Uddin',
            'mother_name'        => 'Sufia Begum',
            'designation_id'     => '1',
            'designation_name'   => 'Assistant Police Commissioner',
            'organization_name'  => 'Police',
            'unit_name'          => 'Telecom',
            'division'           => 'DMP',
            'working_area'       => 'Gulshan',
            'previous_working_area'   => 'Dhanmondi',
            'family_member'           => '4',
            'mobile_no'               => '01847215658',
            'date_of_joining'         => '2018-01-01',
            'status'             => 'Active',
        ));

        User::create(array(
            'name'               => 'Khan Mahmood',
            'email'              => 'khan@gmail.com',
            'password'           => bcrypt('123456'),
            'username'           => 'khanmd',
            'ration_id'          => 'RID1230002',
            'brash_no'           => 'B1230002',
            'police_id_no'       => 'PID4560002',
            'nid'                => '19957026613000210',
            'group'              => 'Gazetted',
            'father_name'        => 'Taher Ferdous',
            'mother_name'        => 'Momotaj Begum',
            'designation_id'     => '2',
            'designation_name'   => 'Police Commissioner',
            'organization_name'  => 'Police',
            'unit_name'          => 'Telecom',
            'division'           => 'DMP',
            'working_area'       => 'Shahbag',
            'previous_working_area'   => 'Gulshan',
            'family_member'           => '3',
            'mobile_no'               => '01847215659',
            'date_of_joining'         => '2017-01-03',
            'status'             => 'Active',
        ));

        User::create(array(
            'name'               => 'Jamil Hossain',
            'email'              => 'jamil@gmail.com',
            'password'           => bcrypt('123456'),
            'username'           => 'jamil',
            'ration_id'          => 'RID1230003',
            'brash_no'           => 'B1230003',
            'police_id_no'       => 'PID4560003',
            'nid'                => '19897026613000210',
            'group'              => 'Non Gazetted',
            'father_name'        => 'Kabir Hossain',
            'mother_name'        => 'Sahana Begum',
            'designation_id'     => '3',
            'designation_name'   => 'Inspector',
            'organization_name'  => 'Police',
            'unit_name'          => 'Telecom',
            'division'           => 'DMP',
            'working_area'       => 'Motijheel',
            'previous_working_area'   => 'Uttara',
            'family_member'           => '3',
            'mobile_no'               => '01556215659',
            'date_of_joining'         => '2016-01-01',
            'status'             => 'Active',
        ));

        User::create(array(
            'name'               => 'Admin',
            'email'              => 'admin@admin.com',
            'password'           => bcrypt('123456'),
            'username'           => 'admin',
            'ration_id'          => 'RID1230004',
            'brash_no'           => 'B1230004',
            'police_id_no'       => 'PID4560004',
            'nid'                => '198970266136778810',
            'group'              => 'Non Gazetted',
            'father_name'        => 'Admin',
            'mother_name'        => 'Admin',
            'designation_id'     => '4',
            'designation_name'   => 'Sub Inspector',
            'organization_name'  => 'Police',
            'unit_name'          => 'Telecom',
            'division'           => 'DMP',
            'working_area'       => 'Ramna',
            'previous_working_area'   => 'Motijheel',
            'family_member'           => '4',
            'mobile_no'               => '016786215659',
            'date_of_joining'         => '2015-01-01',
            'status'             => 'Active',
        ));

    }
}
