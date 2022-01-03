<?php

namespace BacklogBundle\Repository;

use BacklogBundle\Entity\Task;

/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends \Doctrine\ORM\EntityRepository
{

    public function backlogTasks($id){
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.archive = 0  ");
        return $query->getResult();
    }

    public function backlogArchives($id){
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.archive = 1 ");
        return $query->getResult();
    }

    public function TasksToDo($id){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'To Do' ");
        return $query->getSingleScalarResult();
    }

    public function TasksInProgress($id){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'In Progress' ");
        return $query->getSingleScalarResult();
    }

    public function TasksDone($id){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'Done' ");
        return $query->getSingleScalarResult();
    }




    public function backlogTasksUser($id, $id_u){
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.archive = 0 AND c.user='$id_u' ");
        return $query->getResult();
    }

    public function backlogArchivesUser($id, $id_u){
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.archive = 1 AND c.user='$id_u'");
        return $query->getResult();
    }

    public function TasksToDoUser($id, $id_u){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'To Do' AND c.user='$id_u' ");
        return $query->getSingleScalarResult();
    }

    public function TasksInProgressUser($id, $id_u){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'In Progress' AND c.user='$id_u'");
        return $query->getSingleScalarResult();
    }

    public function TasksDoneUser($id, $id_u){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(c) FROM BacklogBundle:Task c WHERE c.backlog ='$id' AND c.state = 'Done' AND c.user='$id_u'");
        return $query->getSingleScalarResult();
    }

}