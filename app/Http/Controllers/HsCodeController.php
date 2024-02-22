<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HsCodeController extends Controller
{
    //
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
 
    function subchapterPage($chapterCode,$description)
    {
        
        $subchapters = DB::table('taric')
            ->select('hs_code', 'Description')
            ->where('hs_code', 'like', $chapterCode . '__')
            ->whereRaw('LENGTH(hs_code) = 4') 
            ->get();

         return view('frontend.hscode-subchapter', ['subchapters' =>  $subchapters,'chapterCode' => $chapterCode , 'description' => $description]);
    }
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
}
