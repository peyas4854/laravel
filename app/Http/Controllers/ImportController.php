<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Exports\CommentExport;

use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function  importExportview(){
 
     return view('Import.importExport');
    }
    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function import(){
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }
     public function CommentData(){

     return Excel::download(new CommentExport, 'coments.xlsx');

    }
    
}
