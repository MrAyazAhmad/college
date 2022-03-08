<?php

namespace App\Exports;

use App\Models\BsMathematicsRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class BsMathematicsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function view(): View
        {
               $bsmath=BsMathematicsRoll::all();
            return view('export.bsmathexcel', [
                'bsmath' => $bsmath
            ]);
        }
}
