<?php

namespace App\Repository;

use App\Entity\ArtisteTravaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArtisteTravaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArtisteTravaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArtisteTravaux[]    findAll()
 * @method ArtisteTravaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtisteTravauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArtisteTravaux::class);
    }

    // /**
    //  * @return ArtisteTravaux[] Returns an array of ArtisteTravaux objects
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
    public function findOneBySomeField($value): ?ArtisteTravaux
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
