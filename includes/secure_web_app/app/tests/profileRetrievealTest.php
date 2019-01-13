<?php
/**
 * Created by PhpStorm.
 * User: php-slim
 * Date: 13/01/19
 * Time: 22:03
 */

require_once '../src/UserModel.php';

use PHPUnit\Framework\TestCase;

class profileRetrievealTest extends TestCase
{



    public function testProfileRetrieval(){

    $arr_user_details = array('foo','bar','hello','world');

    $obj_user = new UserModel();

    $obj_user->set_user_values($arr_user_details[0],$arr_user_details[1],$arr_user_details[2],$arr_user_details[3]);

    $this->assertEquals($arr_user_details[0], $obj_user->get_user_data('username'));
    $this->assertEquals($arr_user_details[1], $obj_user->get_user_data('password'));
    $this->assertEquals($arr_user_details[2], $obj_user->get_user_data('name'));
    $this->assertEquals($arr_user_details[3], $obj_user->get_user_data('surname'));



    }
}

