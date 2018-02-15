<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Automovil extends Vehiculo
{
    private $tarjetaCirculacion;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getTarjetaCirculacion()
    {
        return $this->tarjetaCirculacion;
    }

    /**
     * @param mixed $tarjetaCirculacion
     */
    public function setTarjetaCirculacion($tarjetaCirculacion)
    {
        $this->tarjetaCirculacion = $tarjetaCirculacion;
    }

    
    
}

