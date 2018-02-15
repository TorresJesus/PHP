<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class MovimientosVehiculo
{
    private $vehiculo = Array();
    
    function __construct(){
        
    }
    
    public function add(Vehiculo $vehiculo){
        $this->vehiculo = $vehiculo;
    }
    
    
    public function mostrarCaracteristicas($pVehiculoKey){
        
    }
}

