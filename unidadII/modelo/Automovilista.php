<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Automovilista extends Docente
{
    private $noTarjetaAcceso;
    private $tarjetaConducir;
    private $aclaracion = Array();
    private $automovil = Array();
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoTarjetaAcceso()
    {
        return $this->noTarjetaAcceso;
    }

    /**
     * @return mixed
     */
    public function getTarjetaConducir()
    {
        return $this->tarjetaConducir;
    }

    /**
     * @param mixed $noTarjetaAcceso
     */
    public function setNoTarjetaAcceso($noTarjetaAcceso)
    {
        $this->noTarjetaAcceso = $noTarjetaAcceso;
    }

    /**
     * @param mixed $tarjetaConducir
     */
    public function setTarjetaConducir($tarjetaConducir)
    {
        $this->tarjetaConducir = $tarjetaConducir;
    }

    public function addAclaracion(Aclaracion $aclaracion){
        $this->aclaracion = $aclaracion;
    }

    /**
     * @param multitype: $automovil
     */
    public function addAutomovil(Automovil $automovil)
    {
        $this->automovil = $automovil;
    }

    
    
}

class Automovilista2 extends Estudiante
{
    private $noTarjetaAcceso;
    private $tarjetaConducir;
    private $aclaracion = Array();
    private $automovil = Array();
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoTarjetaAcceso()
    {
        return $this->noTarjetaAcceso;
    }
    
    /**
     * @return mixed
     */
    public function getTarjetaConducir()
    {
        return $this->tarjetaConducir;
    }
    
    /**
     * @param mixed $noTarjetaAcceso
     */
    public function setNoTarjetaAcceso($noTarjetaAcceso)
    {
        $this->noTarjetaAcceso = $noTarjetaAcceso;
    }
    
    /**
     * @param mixed $tarjetaConducir
     */
    public function setTarjetaConducir($tarjetaConducir)
    {
        $this->tarjetaConducir = $tarjetaConducir;
    }
    
    public function addAclaracion(Aclaracion $aclaracion){
        $this->aclaracion = $aclaracion;
    }
    
    /**
     * @param multitype: $automovil
     */
    public function addAutomovil(Automovil $automovil)
    {
        $this->automovil = $automovil;
    }
    
    
    
}

