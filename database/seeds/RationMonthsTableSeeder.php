<?php

use App\RationMonth;
use Illuminate\Database\Seeder;

class RationMonthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RationMonth::create(array(
            'name'               => 'October 2018',
            'month'              => 'October',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'November 2018',
            'month'              => 'November',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'December 2018',
            'month'              => 'December',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'January 2018',
            'month'              => 'January',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'February 2018',
            'month'              => 'February',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'March 2018',
            'month'              => 'March',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'April 2018',
            'month'              => 'April',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'May 2018',
            'month'              => 'May',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'June 2018',
            'month'              => 'June',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'July 2018',
            'month'              => 'July',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'August 2018',
            'month'              => 'August',
            'year'               => '2018',
            'status'             => 'Active',
        ));
        RationMonth::create(array(
            'name'               => 'September 2018',
            'month'              => 'September',
            'year'               => '2018',
            'status'             => 'Active',
        ));
    }
}
