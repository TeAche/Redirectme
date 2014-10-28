<?php
class CheckSeeder extends DatabaseSeeder
{
    function run ()
    {
        $checks = array(
            array('title' => 'check1'),
            array('title' => 'check2'),
            array('title' => 'check3'),
            array('title' => 'check4'),
            array('title' => 'check5'),
        );

        foreach ($checks as $check)
        {
            Check::create($check);
        }
    }
}
