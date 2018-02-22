<?php

namespace HTL\ImmobilierBundle\Repository;

/**
 * LocaliteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LocaliteRepository extends \Doctrine\ORM\EntityRepository
{

     public function FindAllLocalite($libellelocalite)
    {

             return $this->getEntityManager()
                ->createQuery(

                   'SELECT b, i FROM HTLImmobilierBundle:Bien b
        left Join b.images i Join b.typebien t Join b.libellelocalite l WHERE b.etat = 1 and l.libellelocalite=:libellelocalite'
                )
                 ->setParameter('libellelocalite',$libellelocalite)->execute();

        }

}
