<?php
/**
 * Created by O2System Framework File Generator.
 * DateTime: 24/06/2018 13:06
 */

// ------------------------------------------------------------------------

namespace App\Controllers;

// ------------------------------------------------------------------------

use O2System\Framework\Http\Controllers\Restful as Controller;


/**
 * Class Login
 *
 * @package \App\Controllers
 */
class Auth extends Controller
{
    var $err = "";
    var $cek = "";
    var $content = "";
    public function index()
    {
      foreach ($_REQUEST as $key => $value) {
				  $$key = $value;
			}
      if(sqlRowCount(sqlQuery("select * from member where email = '$email' and md5(password) = '".md5($password)."'")) != 0){
        $getDataUser = sqlArray(sqlQuery("select * from member where email='$email'"));
        $this->content = $getDataUser;
      }else{
        $this->err = "Login Gagal";
      }
      $this->sendPayload(
          [
              'request' => [
                  'method' => $_SERVER[ 'REQUEST_METHOD' ],
                  'time'   => $_SERVER[ 'REQUEST_TIME' ],
                  'uri'    => $_SERVER[ 'REQUEST_URI' ],
                  'agent'  => $_SERVER[ 'HTTP_USER_AGENT' ],
              ],
              'cek'  => $this->cek,
              'content'  => $this->content,
              'err' => $this->err
          ]
      );
    }
}
