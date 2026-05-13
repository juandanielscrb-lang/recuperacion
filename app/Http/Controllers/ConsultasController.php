<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use App\Models\Service;
use App\Models\Company;
use App\Models\Quarter;
use App\Models\Army_corp;

class ConsultasController extends Controller
{
    // Ver servicios de un soldado
    public function verSoldado(){
        $soldier = Soldier::find(1);
        return $soldier->services;
    }

    // Ver compañía de un soldado
    public function verCompany(){
        $soldier = Soldier::find(1);
        return $soldier->company;
    }

    // Ver cuartel de un soldado
    public function verQuarter(){
        $soldier = Soldier::find(1);
        return $soldier->quarter;
    }

    // Ver cuerpo militar de un soldado
    public function verArmy(){
        $soldier = Soldier::find(1);

        return $soldier->army_corp;
    }

    // Ver todos los soldados
    public function todosSoldados()
    {
        return Soldier::all();
    }

    // Ver todos los servicios
    public function todosServicios()
    {
        return Service::all();
    }

    // Buscar soldado por id
    public function buscarSoldado()
    {
        return Soldier::where('id', 1)->get();
    }

    // Soldados con sus servicios
    public function soldadosServicios()
    {
        return Soldier::with('services')->get();
    }

    // Soldados con compañía y cuartel
    public function consultasAnidadas()
    {
        return Soldier::with('company', 'quarter')->get();
    }
}