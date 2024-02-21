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
    function subchap(){
        $hscodeData = DB::table('taric')->get();
        $subchapters = [];
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
                case 4:
                    // Sub-chapter
                    $chapter = substr($hsCode, 0, 2);
                    $subchapters[$chapter][$hsCode] = ['description' => $description, 'lists' => []];
                    break;
                case 6:
                    // List
                    $chapter = substr($hsCode, 0, 2);
                    $subchapter = substr($hsCode, 0, 4);
                    $lists[$subchapter][$hsCode] = ['description' => $description];
                    break;
                default:
                    // Handle invalid HS_code values
                    break;
            }
        }
        return view('frontend.hscode-subchpter', compact('subchapters'));
    }
}
