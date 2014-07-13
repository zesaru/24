<?php

namespace Eventos\ContactosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactoCopy
 *
 * @ORM\Table(name="Contacto_copy", indexes={@ORM\Index(name="IDX_DE372B6A3397707A", columns={"categoria_id"})})
 * @ORM\Entity
 */
class ContactoCopy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoria_id", type="integer", nullable=true)
     */
    private $categoriaId;

    /**
     * @var string
     *
     * @ORM\Column(name="vocativo", type="string", length=255, nullable=false)
     */
    private $vocativo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo1", type="string", length=255, nullable=true)
     */
    private $titulo1;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo2", type="string", length=255, nullable=true)
     */
    private $titulo2;

    /**
     * @var string
     *
     * @ORM\Column(name="organizacion", type="string", length=255, nullable=true)
     */
    private $organizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="dir1", type="string", length=255, nullable=true)
     */
    private $dir1;

    /**
     * @var string
     *
     * @ORM\Column(name="dir2", type="string", length=255, nullable=false)
     */
    private $dir2;

    /**
     * @var string
     *
     * @ORM\Column(name="codigopostal", type="string", length=255, nullable=false)
     */
    private $codigopostal;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="movil", type="string", length=255, nullable=true)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadeactualizacion", type="date", nullable=false)
     */
    private $fechadeactualizacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="impresion", type="boolean", nullable=true)
     */
    private $impresion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horadeimpresion", type="datetime", nullable=true)
     */
    private $horadeimpresion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enviadas", type="boolean", nullable=true)
     */
    private $enviadas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horadeenvio", type="datetime", nullable=true)
     */
    private $horadeenvio;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_invitados", type="integer", nullable=true)
     */
    private $numInvitados;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_respondidos", type="integer", nullable=true)
     */
    private $numRespondidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaderespuesta", type="datetime", nullable=true)
     */
    private $fechaderespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="via", type="string", length=50, nullable=true)
     */
    private $via;

    /**
     * @var integer
     *
     * @ORM\Column(name="contesto", type="integer", nullable=true)
     */
    private $contesto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ingresohora", type="datetime", nullable=false)
     */
    private $ingresohora;

    /**
     * @var integer
     *
     * @ORM\Column(name="ingreso", type="integer", nullable=true)
     */
    private $ingreso;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     * @return ContactoCopy
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return integer 
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set vocativo
     *
     * @param string $vocativo
     * @return ContactoCopy
     */
    public function setVocativo($vocativo)
    {
        $this->vocativo = $vocativo;

        return $this;
    }

    /**
     * Get vocativo
     *
     * @return string 
     */
    public function getVocativo()
    {
        return $this->vocativo;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return ContactoCopy
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return ContactoCopy
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set titulo1
     *
     * @param string $titulo1
     * @return ContactoCopy
     */
    public function setTitulo1($titulo1)
    {
        $this->titulo1 = $titulo1;

        return $this;
    }

    /**
     * Get titulo1
     *
     * @return string 
     */
    public function getTitulo1()
    {
        return $this->titulo1;
    }

    /**
     * Set titulo2
     *
     * @param string $titulo2
     * @return ContactoCopy
     */
    public function setTitulo2($titulo2)
    {
        $this->titulo2 = $titulo2;

        return $this;
    }

    /**
     * Get titulo2
     *
     * @return string 
     */
    public function getTitulo2()
    {
        return $this->titulo2;
    }

    /**
     * Set organizacion
     *
     * @param string $organizacion
     * @return ContactoCopy
     */
    public function setOrganizacion($organizacion)
    {
        $this->organizacion = $organizacion;

        return $this;
    }

    /**
     * Get organizacion
     *
     * @return string 
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }

    /**
     * Set dir1
     *
     * @param string $dir1
     * @return ContactoCopy
     */
    public function setDir1($dir1)
    {
        $this->dir1 = $dir1;

        return $this;
    }

    /**
     * Get dir1
     *
     * @return string 
     */
    public function getDir1()
    {
        return $this->dir1;
    }

    /**
     * Set dir2
     *
     * @param string $dir2
     * @return ContactoCopy
     */
    public function setDir2($dir2)
    {
        $this->dir2 = $dir2;

        return $this;
    }

    /**
     * Get dir2
     *
     * @return string 
     */
    public function getDir2()
    {
        return $this->dir2;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     * @return ContactoCopy
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string 
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return ContactoCopy
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return ContactoCopy
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return ContactoCopy
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ContactoCopy
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ContactoCopy
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechadeactualizacion
     *
     * @param \DateTime $fechadeactualizacion
     * @return ContactoCopy
     */
    public function setFechadeactualizacion($fechadeactualizacion)
    {
        $this->fechadeactualizacion = $fechadeactualizacion;

        return $this;
    }

    /**
     * Get fechadeactualizacion
     *
     * @return \DateTime 
     */
    public function getFechadeactualizacion()
    {
        return $this->fechadeactualizacion;
    }

    /**
     * Set impresion
     *
     * @param boolean $impresion
     * @return ContactoCopy
     */
    public function setImpresion($impresion)
    {
        $this->impresion = $impresion;

        return $this;
    }

    /**
     * Get impresion
     *
     * @return boolean 
     */
    public function getImpresion()
    {
        return $this->impresion;
    }

    /**
     * Set horadeimpresion
     *
     * @param \DateTime $horadeimpresion
     * @return ContactoCopy
     */
    public function setHoradeimpresion($horadeimpresion)
    {
        $this->horadeimpresion = $horadeimpresion;

        return $this;
    }

    /**
     * Get horadeimpresion
     *
     * @return \DateTime 
     */
    public function getHoradeimpresion()
    {
        return $this->horadeimpresion;
    }

    /**
     * Set enviadas
     *
     * @param boolean $enviadas
     * @return ContactoCopy
     */
    public function setEnviadas($enviadas)
    {
        $this->enviadas = $enviadas;

        return $this;
    }

    /**
     * Get enviadas
     *
     * @return boolean 
     */
    public function getEnviadas()
    {
        return $this->enviadas;
    }

    /**
     * Set horadeenvio
     *
     * @param \DateTime $horadeenvio
     * @return ContactoCopy
     */
    public function setHoradeenvio($horadeenvio)
    {
        $this->horadeenvio = $horadeenvio;

        return $this;
    }

    /**
     * Get horadeenvio
     *
     * @return \DateTime 
     */
    public function getHoradeenvio()
    {
        return $this->horadeenvio;
    }

    /**
     * Set numInvitados
     *
     * @param integer $numInvitados
     * @return ContactoCopy
     */
    public function setNumInvitados($numInvitados)
    {
        $this->numInvitados = $numInvitados;

        return $this;
    }

    /**
     * Get numInvitados
     *
     * @return integer 
     */
    public function getNumInvitados()
    {
        return $this->numInvitados;
    }

    /**
     * Set numRespondidos
     *
     * @param integer $numRespondidos
     * @return ContactoCopy
     */
    public function setNumRespondidos($numRespondidos)
    {
        $this->numRespondidos = $numRespondidos;

        return $this;
    }

    /**
     * Get numRespondidos
     *
     * @return integer 
     */
    public function getNumRespondidos()
    {
        return $this->numRespondidos;
    }

    /**
     * Set fechaderespuesta
     *
     * @param \DateTime $fechaderespuesta
     * @return ContactoCopy
     */
    public function setFechaderespuesta($fechaderespuesta)
    {
        $this->fechaderespuesta = $fechaderespuesta;

        return $this;
    }

    /**
     * Get fechaderespuesta
     *
     * @return \DateTime 
     */
    public function getFechaderespuesta()
    {
        return $this->fechaderespuesta;
    }

    /**
     * Set via
     *
     * @param string $via
     * @return ContactoCopy
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string 
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set contesto
     *
     * @param integer $contesto
     * @return ContactoCopy
     */
    public function setContesto($contesto)
    {
        $this->contesto = $contesto;

        return $this;
    }

    /**
     * Get contesto
     *
     * @return integer 
     */
    public function getContesto()
    {
        return $this->contesto;
    }

    /**
     * Set ingresohora
     *
     * @param \DateTime $ingresohora
     * @return ContactoCopy
     */
    public function setIngresohora($ingresohora)
    {
        $this->ingresohora = $ingresohora;

        return $this;
    }

    /**
     * Get ingresohora
     *
     * @return \DateTime 
     */
    public function getIngresohora()
    {
        return $this->ingresohora;
    }

    /**
     * Set ingreso
     *
     * @param integer $ingreso
     * @return ContactoCopy
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return integer 
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }
}
