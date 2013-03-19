<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nirmal
 * Date: 18/3/13
 * Time: 12:12 AM
 * To change this template use File | Settings | File Templates.
 */

App::uses('HttpSocket', 'Network/Http');



class HelloController extends AppController {

    public function index(){
        $HttpSocket = new HttpSocket();

        $HttpSocket->configAuth('Digest','admin','1234');

// string query
        $results = $HttpSocket->get('http://test.restapi/index.php/api/freephoo/users');

// array query
       // $results = $HttpSocket->get('http://www.google.com/search', array('q' => 'cakephp'));
        $this->set("test",$results);
    }
}