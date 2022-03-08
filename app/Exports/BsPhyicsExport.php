<?php

namespace App\Exports;


use App\Models\BsPhyicsRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BsPhyicsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function view(): View
        {
               $bsphyics=BsPhyicsRoll::all();
            return view('export.bsphyicsexcel', [
                'bsphyics' => $bsphyics
            ]);
        }
}
