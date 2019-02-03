<?php

namespace App\Repository;

use App\Entity\WebProperty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WebProperty|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebProperty|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebProperty[]    findAll()
 * @method WebProperty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebPropertyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WebProperty::class);
    }

    // /**
    //  * @return WebProperty[] Returns an array of WebProperty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WebProperty
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
