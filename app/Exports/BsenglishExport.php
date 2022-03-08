<?php

namespace App\Exports;
use DB;
use App\Models\BsEnglishRoll;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BsenglishExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
           $bsenglish=BsEnglishRoll::all();
        return view('export.bsenglishexcel', [
            'bsenglish' => $bsenglish
        ]);
    }
}
