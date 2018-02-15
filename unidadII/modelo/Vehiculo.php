<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Vehiculo
{
    protected $vehiculoKey;
    protected $noPlaza;
    protected $modelo;
    protected $marca;
    protected $color;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getVehiculoKey()
    {
        return $this->vehiculoKey;
    }

    /**
     * @return mixed
     */
    public function getNoPlaza()
    {
        return $this->noPlaza;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $vehiculoKey
     */
    public function setVehiculoKey($vehiculoKey)
    {
        $this->vehiculoKey = $vehiculoKey;
    }

    /**
     * @param mixed $noPlaza
     */
    public function setNoPlaza($noPlaza)
    {
        $this->noPlaza = $noPlaza;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    
    
}


