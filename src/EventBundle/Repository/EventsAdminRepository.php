<?php

namespace EventBundle\Repository;

/**
 * EventsAdminRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventsAdminRepository extends \Doctrine\ORM\EntityRepository
{



    public function findTitre($input)
    {
        $query=$this->getEntityManager()->createQuery("SELECT f FROM EventBundle:EventsAdmin f 
        WHERE f.TitreEvnt LIKE '%$input%' 
        or f.NumeroEvent LIKE '%$input%' 
        or f.TypeEvent LIKE '%$input%'");

        return $query->getResult();
    }

    public function findcwf()
    {
        $query=$this->getEntityManager()->createQuery("SELECT f FROM EventBundle:EventsAdmin f ,EventBundle:Participant p 
        WHERE f.idEv=p.choix");


        return $query->getResult();
    }








}
