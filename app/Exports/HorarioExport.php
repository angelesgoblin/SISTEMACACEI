<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class HorarioExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct($horarios){
        $this->horarios = $horarios;

    }
    public function view(): view
    {
        return view('horario.buscarExport',[
            'horarios'=>$this->horarios
        ]);
    }
}
