<?php

namespace App\Repository;

use App\Entity\DddMenuPizza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DddMenuPizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method DddMenuPizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method DddMenuPizza[]    findAll()
 * @method DddMenuPizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DddMenuPizzaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DddMenuPizza::class);
    }

    // /**
    //  * @return DddMenuPizza[] Returns an array of DddMenuPizza objects
    //  */
    
    public function findBySearch($value,$sort,$direction)
    {
         $direction==0?$direction="ASC":$direction="DESC";
         if($value!="empty"){
            return $this->createQueryBuilder('d')
            ->where('d.name LIKE :search')
            ->orWhere('d.description LIKE :search')
            ->orderBy("d.".$sort,$direction)
            ->setParameter("search","%".$value."%")
            ->getQuery()
            ->getResult();
         }
         else{
        return $this->createQueryBuilder('d')
            ->orderBy("d.".$sort,$direction)
            ->getQuery()
            ->getResult();
         }
    }
    

    /*
    public function findOneBySomeField($value): ?DddMenuPizza
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
