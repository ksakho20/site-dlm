<?php

namespace App\Repository;

use App\Entity\Activitesportive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activitesportive>
 *
 * @method Activitesportive|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitesportive|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitesportive[]    findAll()
 * @method Activitesportive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitesportiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activitesportive::class);
    }

//    /**
//     * @return Activitesportive[] Returns an array of Activitesportive objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Activitesportive
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
