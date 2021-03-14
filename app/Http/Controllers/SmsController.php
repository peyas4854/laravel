<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class SmsController extends Controller
{



    public function nexmo()
    {
        try {
            $basic = new \Nexmo\Client\Credentials\Basic('fdafddbf', 'aqVp1tyU1deGcd3o');
            $client = new \Nexmo\Client($basic);

            $receiverNumber = "+8801677528939";
            $message = "hello! Peyas ";

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Vonage APIs',
                'text' => $message
            ]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
