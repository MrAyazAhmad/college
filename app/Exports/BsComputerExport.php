<?php

namespace App\Exports;

use App\Models\BsComputerRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BsComputerExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view(): View
    {
           $bscs=BsComputerRoll::all();
        return view('export.bscsexcel', [
            'bscs' => $bscs
        ]);
    }
}
