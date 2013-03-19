<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nirmal
 * Date: 17/3/13
 * Time: 11:39 PM
 * To change this template use File | Settings | File Templates.
 */

class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'cakephptest',
        'prefix' => '',
        //'encoding' => 'utf8',
    );

    public $test = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_database_name',
        'prefix' => '',
        //'encoding' => 'utf8',
    );
}