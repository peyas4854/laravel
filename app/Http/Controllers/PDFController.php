<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;
use attachFromStorage;
use Mail;
use Illuminate\Support\Str;

class PDFController extends Controller
{

    public function generatepdf()
    {

        $data = ['title' => 'Demo tite'];
        $data["email"] = "peyas3500@gmail.com";
//        $pdf = PDF::loadView('myPDF', $data);
//        $pdf_name = Str::random(7).'.pdf';
//        Storage::put('public/pdf/'.$pdf_name, $pdf->output());
//        $pdf_path = storage_path($pdf_name);
          $psd_name = asset('pdf/6p5vhto');


        if (config('filesystems.default') == 'public') {
            $path = realpath('storage/pdf/6p5vhto');
        } else {
            $path = Storage::url("pdf/6p5vhto'");
        }

//======================
        Mail::send('myPDF', $data, function ($message) use ($data, $path) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attach($path);

        });
        return 'send success';


    }
}
