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

	public function findTotalDeInvitados()
	{
		$em = $this->getEntityManager();
		$query = $em->createQuery('
			select sum(c.numInvitados) from ContactosBundle:contacto c
		');
		return $query->getSingleScalarResult();
	}

	public function findTotalRespondieron()
	{
		$em = $this->getEntityManager();
		$query = $em->createQuery('
			select sum(c.numRespondidos) from ContactosBundle:contacto c
		');
		return $query->getSingleScalarResult();
	}

	public function findTotalRespondieronSi()
	{
		$em = $this->getEntityManager();
		$query = $em->createQuery('
			select sum(c.numRespondidos) from ContactosBundle:contacto c
			where c.contesto=1
		');
		return $query->getSingleScalarResult();
	}

	public function findTotalRespondieronNo()
	{
		$em = $this->getEntityManager();
		$query = $em->createQuery('
			select sum(c.numRespondidos) from ContactosBundle:contacto c
			where c.contesto=2
		');
		return $query->getSingleScalarResult();
	}

}



