<?php

namespace App\Repository;

use App\Entity\Artworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Artworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artworks[]    findAll()
 * @method Artworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtworksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artworks::class);
    }

    // /**
    //  * @return Artworks[] Returns an array of Artworks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Artworks
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
