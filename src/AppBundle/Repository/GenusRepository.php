<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/8/16
 * Time: 1:26 PM
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublishedOrderBySize()
    {
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished=:isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()->execute();
    }
}