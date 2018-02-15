<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Guardia extends Usuario
{
    private $empleadoKey;
    private $noEmpleado;
    private $turno;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getEmpleadoKey()
    {
        return $this->empleadoKey;
    }

    /**
     * @return mixed
     */
    public function getNoEmpleado()
    {
        return $this->noEmpleado;
    }

    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param mixed $empleadoKey
     */
    public function setEmpleadoKey($empleadoKey)
    {
        $this->empleadoKey = $empleadoKey;
    }

    /**
     * @param mixed $noEmpleado
     */
    public function setNoEmpleado($noEmpleado)
    {
        $this->noEmpleado = $noEmpleado;
    }

    /**
     * @param mixed $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    
    
}

