<?php

namespace App\Exports;
use App\Models\BsChemisteryRoll;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BsChemistryExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
           $bschemistry=BsChemisteryRoll::all();
            return view('export.bschemistryexcel', [
                'bschemistry' => $bschemistry
            ]);
    }
}
