<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function tabNumbercorrection($tabNumber) {
        if ($tabNumber <= 9) $tabNumber = '000' . $tabNumber;
        elseif ($tabNumber <= 99) $tabNumber = '00' . $tabNumber;
        elseif ($tabNumber <= 999) $tabNumber = '0' . $tabNumber;

        return $tabNumber;
    }
}
