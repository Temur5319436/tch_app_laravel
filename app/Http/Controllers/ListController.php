<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Exception;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Block\Element\IndentedCode;

class ListController extends Controller
{
    public function getList($date)
    {
        try {
            $user = Auth::user();
            $tabNumber = Worker::find($user->worker_id)->tab_number;
            $date = substr($date, 0, 7);
    
            $myfile = fopen(__DIR__ . "\\lists\\$date.txt", "r") or die("Unable to open file!");
            $text = fread($myfile, filesize(__DIR__ . "\\lists\\$date.txt"));
            fclose($myfile);
            $index = strpos($text, "$tabNumber: ", 0);
            $indexPosition = strpos($text, '$', $index - 100);
            $endPosition = strpos($text, '$', $index + 1) - 1;
            $list = substr($text, $indexPosition + 1, $endPosition - $indexPosition);
            
            return ['list' => $list, 'message' => 'ok'];
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage(), 'list' => 'Листок мавжуд емас!'], 500);
        }
    }
}
