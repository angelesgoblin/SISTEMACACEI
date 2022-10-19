<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Periodo;
use DB;

class borrarDatos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'borraryllenar:datos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Borrar datos de tres años atras, llenar tablas';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        Periodo::where('created_at','<=', now()->subYears(3))->delete();//borar datos de hace 3 años. tablas vinculadas a periodo
        DB::select(DB::raw("call llenartabla"));//llenar tablas cedula, evaluaciones
      
    }
}
