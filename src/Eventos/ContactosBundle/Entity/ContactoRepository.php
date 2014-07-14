<?php

namespace Eventos\ContactosBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ContactoRepository extends EntityRepository
{
	public function queryTodosLosContactos()
	{
		$em= $this->getEntityManager();

		$consulta = $em->createQuery('
		SELECT c
		FROM ContactosBundle:Contacto c
		');

		return $consulta;

	}

	public function findTodosLosContactos()
	{
		return $this->queryTodosLosContactos()->getResult();
	}

	public function finRespondieronSI()
	{
		
	}
}



