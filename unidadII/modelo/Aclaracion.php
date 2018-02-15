<?php
namespace modelo;
/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Aclaracion
{
    private $aclaracionKey;
    private $fecha;
    private $tipoIncidencia;
    
    function __construct(){
        
    }
    
    public function registrarAclaracion($pAclaracionKey, $pFecha, $pTipoIncidencia){
        
    }
    /**
     * @return mixed
     */
    public function getAclaracionKey()
    {
        return $this->aclaracionKey;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getTipoIncidencia()
    {
        return $this->tipoIncidencia;
    }

    /**
     * @param mixed $aclaracionKey
     */
    public function setAclaracionKey($aclaracionKey)
    {
        $this->aclaracionKey = $aclaracionKey;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @param mixed $tipoIncidencia
     */
    public function setTipoIncidencia($tipoIncidencia)
    {
        $this->tipoIncidencia = $tipoIncidencia;
    }

    
    
}

