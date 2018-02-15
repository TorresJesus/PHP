<?php
namespace modelo;

/*****************************************
 *                                       *
 * @author Erick Jesus Mendoza Torres    *
 * @author Jorge Eduardo Arias Delgado   *
 *                                       *
 *****************************************/

class Acceso
{

    private $accesoKey;

    private $noTarjeta;

    private $fecha;

    private $horaIngreso;

    private $horaSalida;

    private $noGuardiaEntrada;

    private $noGuardiaSalida;

    function __construct()
    {}

    public function registrarEntrada($pAccesoKey, $pNoTarjeta, $pFecha, $pHoraIngreso, $pNoGuardiaEntrada)
    {}
    public function registrarSalida($pAccesoKey, $pNoTarjeta, $pHoraSalida, $pNoGuardiaSalida)
    {}

    /**
     *
     * @return mixed
     */
    public function getAccesoKey()
    {
        return $this->accesoKey;
    }

    /**
     *
     * @return mixed
     */
    public function getNoTarjeta()
    {
        return $this->noTarjeta;
    }

    /**
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     *
     * @return mixed
     */
    public function getHoraIngreso()
    {
        return $this->horaIngreso;
    }

    /**
     *
     * @return mixed
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }

    /**
     *
     * @return mixed
     */
    public function getNoGuardiaEntrada()
    {
        return $this->noGuardiaEntrada;
    }

    /**
     *
     * @return mixed
     */
    public function getNoGuardiaSalida()
    {
        return $this->noGuardiaSalida;
    }

    /**
     *
     * @param mixed $accesoKey
     */
    public function setAccesoKey($accesoKey)
    {
        $this->accesoKey = $accesoKey;
    }

    /**
     *
     * @param mixed $noTarjeta
     */
    public function setNoTarjeta(Automovilista $noTarjeta)
    {
        $this->noTarjeta = $noTarjeta;
    }

    /**
     *
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     *
     * @param mixed $horaIngreso
     */
    public function setHoraIngreso($horaIngreso)
    {
        $this->horaIngreso = $horaIngreso;
    }

    /**
     *
     * @param mixed $horaSalida
     */
    public function setHoraSalida($horaSalida)
    {
        $this->horaSalida = $horaSalida;
    }

    /**
     *
     * @param mixed $noGuardiaEntrada
     */
    public function setNoGuardiaEntrada(Guardia $noGuardiaEntrada)
    {
        $this->noGuardiaEntrada = $noGuardiaEntrada;
    }

    /**
     *
     * @param mixed $noGuardiaSalida
     */
    public function setNoGuardiaSalida(Guardia $noGuardiaSalida)
    {
        $this->noGuardiaSalida = $noGuardiaSalida;
    }
}

