<?php

namespace App\Repository;

use App\Entity\Evenementculturel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenementculturel>
 *
 * @method Evenementculturel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenementculturel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenementculturel[]    findAll()
 * @method Evenementculturel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementculturelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenementculturel::class);
    }

//    /**
//     * @return Evenementculturel[] Returns an array of Evenementculturel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evenementculturel
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
