<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CountriesdataController extends Controller
{
    //
    function countrydata() {
        try {
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('frontend.index', ['countrydata' => $countrydata]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
    }
    function customsdata() {
        try {
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('frontend.customs-data', ['countrydata' => $countrydata]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
    }
    function globaltradedata() {
        try {
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('frontend.global-trade-data', ['countrydata' => $countrydata]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }

    }
    function statisticaldata() {
        try {
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('frontend.statistical-data', ['countrydata' => $countrydata]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
    }
    // Bl-Data
    function blreport() {
        try {
            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('frontend.bl-data', ['countrydata' => $countrydata]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
      
    }
    function countryalldata($country, $Datatype) {
        try {
            $countrydata = DB::table('import')
            -> select('*')
            -> where('country'     , $country)
            -> where('Datatype'    , $Datatype)
            -> union(
                DB::table('export')
            -> select('*')
            -> where('country'     , $country)
            -> where('Datatype'    , $Datatype)   
            )
            ->get();
  
            $continentData = DB::select('select * from continent');
           
            return view('frontend.countries', ['countrydata' => $countrydata,'continentData' => $continentData]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
    }
}
