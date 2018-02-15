<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Usuario
{
    protected $personakey;
    protected $nomCompleto;
    protected $correoElectronico;
    protected $telCel;
    protected $contrasena;
    protected $nomUser;
    
    function  __construct(){
        
    }
    
    
    /**
     * @return mixed
     */
    public function getPersonakey()
    {
        return $this->personakey;
    }

    /**
     * @return mixed
     */
    public function getNomCompleto()
    {
        return $this->nomCompleto;
    }

    /**
     * @return mixed
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * @return mixed
     */
    public function getTelCel()
    {
        return $this->telCel;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @return mixed
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * @param mixed $personakey
     */
    public function setPersonakey($personakey)
    {
        $this->personakey = $personakey;
    }

    /**
     * @param mixed $nomCompleto
     */
    public function setNomCompleto($nomCompleto)
    {
        $this->nomCompleto = $nomCompleto;
    }

    /**
     * @param mixed $correoElectronico
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
    }

    /**
     * @param mixed $telCel
     */
    public function setTelCel($telCel)
    {
        $this->telCel = $telCel;
    }

    /**
     * @param mixed $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @param mixed $nomUser
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;
    }

    
    
    
}

