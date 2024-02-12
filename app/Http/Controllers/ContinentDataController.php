<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ContinentDataController extends Controller
{
    //
    public function continentData($continent)
    {
        $continentName = str_replace('-trade-data', '', $continent);

        try {
            // Fetch data based on the continent name
            $result = DB::select('SELECT * FROM continent WHERE continent = ?', [$continentName]);
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();
            return view('frontend.continent', ['continentdata' => $result,'countrydata'=>$countrydata]);
        } catch (\Throwable $th) {
            Log::error('Error in continentData method: ' . $th->getMessage());
            // Handle the error accordingly
            // You may want to return a 404 page or redirect to a different page
        }
    }
    
}
