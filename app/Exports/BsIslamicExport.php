<?php

namespace App\Exports;
use App\Models\BsIslamicStudiesRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class BsIslamicExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view(): View
    {
           $bsislamic=BsIslamicStudiesRoll::all();
        return view('export.bsislamicexcel', [
            'bsislamic' => $bsislamic
        ]);
    }
}
