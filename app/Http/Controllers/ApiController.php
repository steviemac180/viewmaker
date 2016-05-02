<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ApiController extends Controller
{

    public function orangeData(){

        $result['data'] = DB::table('oranges')
                         ->select('id',
                                  'orange_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function orangeVueData(){

        $oranges = DB::table('oranges')
                             ->select('id as Id',
                                      'orange_name as Name',
                                      'created_at as Created')
                             ->paginate(10);

        return response()->json($oranges);

    }


}
