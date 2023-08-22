<?php

namespace App\Repository;

use App\Entity\Projethumanitaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projethumanitaire>
 *
 * @method Projethumanitaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projethumanitaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projethumanitaire[]    findAll()
 * @method Projethumanitaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjethumanitaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projethumanitaire::class);
    }

//    /**
//     * @return Projethumanitaire[] Returns an array of Projethumanitaire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Projethumanitaire
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
