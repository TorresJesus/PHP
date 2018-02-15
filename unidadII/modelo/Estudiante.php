<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Estudiante extends Usuario
{
    private $noEstudiante;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getNoEstudiante()
    {
        return $this->noEstudiante;
    }

    /**
     * @param mixed $noEstudiante
     */
    public function setNoEstudiante($noEstudiante)
    {
        $this->noEstudiante = $noEstudiante;
    }

    
    
}

