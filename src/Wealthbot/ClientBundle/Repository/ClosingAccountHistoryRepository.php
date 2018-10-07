<?php

namespace Wealthbot\ClientBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ClosingAccountHistoryRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClosingAccountHistoryRepository extends EntityRepository
{
    public function findWhereAccountIdIn($ids)
    {
        $qb = $this->createQueryBuilder('cah');
        $qb->where($qb->expr()->in('cah.account_id', $ids));

        return $qb->getQuery()->execute();
    }
}
