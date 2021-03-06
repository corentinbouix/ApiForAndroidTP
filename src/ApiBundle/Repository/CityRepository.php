<?php

namespace ApiBundle\Repository;

/**
 * CityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CityRepository extends \Doctrine\ORM\EntityRepository
{
    public function getByNameLike($name)
    {
        $repo = $this->getEntityManager()->getRepository('ApiBundle:City');

        return $repo->createQueryBuilder('c')
            ->where('c.name LIKE :name')
            ->setParameter('name', '%'.$name.'%')
            ->getQuery()
            ->getResult();
    }

    public function getByPostCodeLike($postCode)
    {
        $repo = $this->getEntityManager()->getRepository('ApiBundle:City');

        return $repo->createQueryBuilder('c')
            ->where('c.postCode LIKE :postCode')
            ->setParameter('postCode', '%'.$postCode.'%')
            ->getQuery()
            ->getResult();
    }

    public function getByInseeCodeLike($inseeCode)
    {
        $repo = $this->getEntityManager()->getRepository('ApiBundle:City');

        return $repo->createQueryBuilder('c')
            ->where('c.inseeCode LIKE :inseeCode')
            ->setParameter('inseeCode', '%'.$inseeCode.'%')
            ->getQuery()
            ->getResult();
    }
}
