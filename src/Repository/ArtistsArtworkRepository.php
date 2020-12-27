<?php

namespace App\Repository;

use App\Entity\ArtistsArtwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArtistsArtwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArtistsArtwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArtistsArtwork[]    findAll()
 * @method ArtistsArtwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtistsArtworkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArtistsArtwork::class);
    }

    // /**
    //  * @return ArtistsArtwork[] Returns an array of ArtistsArtwork objects
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
    public function findOneBySomeField($value): ?ArtistsArtwork
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
