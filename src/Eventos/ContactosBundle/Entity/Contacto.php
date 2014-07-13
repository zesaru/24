<?php

namespace Eventos\ContactosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 *
 * @ORM\Table(name="Contacto", indexes={@ORM\Index(name="IDX_DE372B6A3397707A", columns={"categoria_id"})})
 * @ORM\Entity(repositoryClass="Eventos\ContactosBundle\Entity\ContactoRepository")
 */
class Contacto
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
     * @ORM\Column(name="organizacion", type="string", length=255, nullable=true)
     */
    private $organizacion;

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
     * @ORM\Column(name="dir1", type="string", length=255, nullable=true)
     */
    private $dir1;

    /**
     * @var string
     *
     * @ORM\Column(name="dir2", type="string", length=255, nullable=true)
     */
    private $dir2;

    /**
     * @var string
     *
     * @ORM\Column(name="codigopostal", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=140, nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=140, nullable=true)
     */
    private $codigo;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;



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
     * Set vocativo
     *
     * @param string $vocativo
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * Set organizacion
     *
     * @param string $organizacion
     * @return Contacto
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
     * Set titulo1
     *
     * @param string $titulo1
     * @return Contacto
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
     * @return Contacto
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
     * Set dir1
     *
     * @param string $dir1
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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
     * @return Contacto
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

    /**
     * Set hora
     *
     * @param string $hora
     * @return Contacto
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Contacto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set categoria
     *
     * @param \Eventos\ContactosBundle\Entity\Categoria $categoria
     * @return Contacto
     */
    public function setCategoria(\Eventos\ContactosBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Eventos\ContactosBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
