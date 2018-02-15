<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Motocicleta extends Vehiculo
{
    private $noTarjetaCirculacion;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoTarjetaCirculacion()
    {
        return $this->noTarjetaCirculacion;
    }

    /**
     * @param mixed $noTarjetaCirculacion
     */
    public function setNoTarjetaCirculacion($noTarjetaCirculacion)
    {
        $this->noTarjetaCirculacion = $noTarjetaCirculacion;
    }

    
    
}

