<?php

namespace App\Http\Controllers;

use App\service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    protected $tarefaService;

    public function __construct(TarefaService $novaTarefaService)
    {
        $this->tarefaService = $novaTarefaService;
    }
}
