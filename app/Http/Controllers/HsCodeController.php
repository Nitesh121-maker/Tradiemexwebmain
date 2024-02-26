<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HsCodeController extends Controller
{
    // Hs code
    function hscode() {
        // Fetch all data from the 'taric' table
        $hscodeData = DB::table('taric')->get();
        // Initialize arrays to hold chapters, sub-chapters, and lists
        $chapters = [];
       
        $lists = [];
    
        // Loop through the dataset and parse HS_code values
        foreach ($hscodeData as $row) {
            $hsCode = $row->hs_code;
            $description = $row->Description;
    
            // Determine the level of the entry (chapter, sub-chapter, or list)
            $level = strlen($hsCode);
    
            // Add the entry to the appropriate array based on the level
            switch ($level) {
                case 2:
                    // Chapter
                    $chapters[$hsCode] = ['description' => $description, 'subchapters' => []];
                    break;
                default:
                    // Handle invalid HS_code values
                    break;
            }
        }
    
        // Pass the organized data to the view
      return view('frontend.hs-code', compact('chapters'));
    }
 
    // Subchapter Page

    function subchapterPage($description,$chapterCode)
    {

        $subchapters = DB::table('taric')
            ->select('hs_code', 'Description')
            ->where('hs_code', 'like', $chapterCode . '__')
            ->whereRaw('LENGTH(hs_code) = 4') 
            ->get();
            // dd($subchapters);
         return view('frontend.hscode-subchapter', ['subchapters' =>  $subchapters,'chapterCode' => $chapterCode , 'description' => $description]);
    }

    // Subchapter list page
    function subchapterListPage($subchapterdescription,$subchaptercode)
    {
        $subchapterslist = DB::table('taric')
        ->select('hs_code', 'Description')
        ->where('hs_code', 'like', $subchaptercode . '%')
        ->whereRaw('LENGTH(hs_code) >= 6 AND LENGTH(hs_code) <= 8')
        ->distinct()
        ->get();
         
         return view('frontend.hscode-subchapterlist', ['subchapterslist' => $subchapterslist, 'subchaptercode' =>$subchaptercode, 'subchapterdescription' => $subchapterdescription]);
    }

    // Search function

    function searchHSCode(Request $request){
        $results = [];
        $validate = $request->validate([
            'hs-code' => 'nullable',
            'description' => 'nullable'
        ]);

        if ($request['hs-code'] && $request['description']) {
            $hscode = $request['hs-code'];
            $desc = $request['description'];
            
            $results = DB::table('taric')
            ->select('*')
            ->where('hs_code', 'like', $hscode . '%')
            ->where('Description', 'LIKE', '%' . $desc . '%')
            ->get();

        } elseif ($request['hs-code']) {
            $hscode = strtoupper($request['hs-code']);
            $results = DB::table('taric')
            ->select('*')
            ->where('hs_code', 'like', $hscode . '%')
            ->get();

        } elseif ($request['description']) {
            $desc = $request['description'];
            $results = DB::table('taric')
            ->select('*')
            ->where('Description', 'LIKE', '%' . $desc . '%')
            ->get();

        } else{
            $results = DB::table('taric')->select('*')->where('hs_code','description')->get();
        }
        return view ('frontend.hs-code', ['results'=>$results]);
    }
}
