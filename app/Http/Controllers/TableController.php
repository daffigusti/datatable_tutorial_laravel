<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TableController extends Controller
{
    //
    public function getIndex(){
        return view("table.table");
    }
    
    public function anyData(){
        require base_path() . '/vendor/server_side/ssp.php';


        // DB table to use
        $table = 'data_user tb';

        // Table's primary key
        $primaryKey = 'tb.id';

        $where = '';

        $join =' ';

        $columns = array(

            array('db' => 'tb.id as user_id', 'dt' => 0),
            array('db' => 'tb.first_name', 'dt' => 1),
            array('db' => 'tb.last_name', 'dt' => 2),
            array('db' => 'tb.gender', 'dt' => 3),
            array('db' => 'tb.email', 'dt' => 4),
            array('db' => 'tb.ip_address', 'dt' => 5),
            array('db' => 'tb.created_at', 'dt' => 6),
        );

        // SQL server connection information
        $sql_details = array(
            'user' => env("DB_USERNAME"),
            'pass' => env("DB_PASSWORD"),
            'db' => env("DB_DATABASE"),
            'host' => env("DB_HOST")
        );

        echo json_encode(
            \ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns, $join, $where)
        );
    }
}
