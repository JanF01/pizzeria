<?php

namespace App\Repository;

use App\Entity\DddMenuPiza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DddMenuPiza|null find($id, $lockMode = null, $lockVersion = null)
 * @method DddMenuPiza|null findOneBy(array $criteria, array $orderBy = null)
 * @method DddMenuPiza[]    findAll()
 * @method DddMenuPiza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DddMenuPizaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DddMenuPiza::class);
    }

    // /**
    //  * @return DddMenuPiza[] Returns an array of DddMenuPiza objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DddMenuPiza
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
