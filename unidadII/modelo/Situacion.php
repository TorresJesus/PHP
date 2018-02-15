<?php
namespace modelo;
/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/


class Situacion
{
    private $situacionKey;
    private $fecha;
    private $noTarjeta;
    private $tipoSituacion;
    
    function __construct(){
        
    }
    
    public function registrarSituacion($pSituacionKey, $pFecha, $pNumeroTarjeta, $pTipoSituacion, Automovilista $pAutomovilista){
        
    }
    
    /**
     * @return mixed
     */
    public function getSituacionKey()
    {
        return $this->situacionKey;
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
    public function getNoTarjeta()
    {
        return $this->noTarjeta;
    }

    /**
     * @return mixed
     */
    public function getTipoSituacion()
    {
        return $this->tipoSituacion;
    }

    /**
     * @param mixed $situacionKey
     */
    public function setSituacionKey($situacionKey)
    {
        $this->situacionKey = $situacionKey;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @param mixed $noTarjeta
     */
    public function setNoTarjeta(Automovilista $noTarjeta)
    {
        $this->noTarjeta = $noTarjeta;
    }

    /**
     * @param mixed $tipoSituacion
     */
    public function setTipoSituacion($tipoSituacion)
    {
        $this->tipoSituacion = $tipoSituacion;
    }

    
    
}

