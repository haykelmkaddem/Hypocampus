<?php

namespace projetsBundle\Repository;

/**
 * projetsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class projetsRepository extends \Doctrine\ORM\EntityRepository
{

    public function searchProjets($input)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM projetsBundle:projets p
                WHERE p.history=0 AND p.projetName LIKE :str'
            )
            ->setParameter('str', '%'.$input.'%')
            ->getResult();
    }
    public function searchProjetsH($input)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM projetsBundle:projets p
                WHERE p.history=1 AND p.projetName LIKE :str'
            )
            ->setParameter('str', '%'.$input.'%')
            ->getResult();
    }



}