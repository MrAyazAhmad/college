<?php

namespace App\Exports;
use App\Models\BsUrduRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class BsurduExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
        public function view(): View
        {
               $bsurdu=BsUrduRoll::all();
            return view('export.bsurduexcel', [
                'bsurdu' => $bsurdu
            ]);
        }
}
