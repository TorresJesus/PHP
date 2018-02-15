<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Administrador extends Usuario
{
    private $noAdministrativo;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoAdministrativo()
    {
        return $this->noAdministrativo;
    }

    /**
     * @param mixed $noAdministrativo
     */
    public function setNoAdministrativo($noAdministrativo)
    {
        $this->noAdministrativo = $noAdministrativo;
    }

    
    
}

