<?php
namespace modelo;
/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Movimientos
{
    private $acceso = Array();
    private $situacion = Array();
    
    function __construct(){
        
    }
    
    public function addMovimiento(Acceso $acceso){
        $this->acceso=$acceso;
    }
    
    public function addSituacion(Situacion $situacion){
        $this->situacion=$situacion;
    }
    
    
    public function obtenerNoVehiculosDia($pFecha){
        
    }
    public function obtenerNoVehiculosSemana($pFechaInicio, $pFechaFin){
        
    }
    public function obtenerNoVehiculosMes($pMes){
        
    }
    public function obtenerNoIncidenDia($pFecha){
        
    }
    public function obtenerNoIncidenSemana($pFechaInicio, $pFechaFin){
        
    }
    public function obtenerNoIncidenMes($pMes){
        
    }
    public function obtenerMayorHoraInciden($pFecha){
        
    }
    public function obtenerTipoVehiculo($pFecha){
        
    }
}

