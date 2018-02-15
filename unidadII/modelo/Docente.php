<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Docente extends Usuario
{
    private $noDocente;
    private $departamento;
    private $telDepartamento;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoDocente()
    {
        return $this->noDocente;
    }

    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @return mixed
     */
    public function getTelDepartamento()
    {
        return $this->telDepartamento;
    }

    /**
     * @param mixed $noDocente
     */
    public function setNoDocente($noDocente)
    {
        $this->noDocente = $noDocente;
    }

    /**
     * @param mixed $departamento
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    /**
     * @param mixed $telDepartamento
     */
    public function setTelDepartamento($telDepartamento)
    {
        $this->telDepartamento = $telDepartamento;
    }

    
    
}

