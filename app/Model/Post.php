<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nirmal
 * Date: 18/3/13
 * Time: 3:19 PM
 * To change this template use File | Settings | File Templates.
 */

class Post extends AppModel
{

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}