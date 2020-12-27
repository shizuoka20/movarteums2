<?php

namespace App\Repository;

use App\Entity\ArtistsDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArtistsDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArtistsDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArtistsDetail[]    findAll()
 * @method ArtistsDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtistsDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArtistsDetail::class);
    }

    // /**
    //  * @return ArtistsDetail[] Returns an array of ArtistsDetail objects
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
    public function findOneBySomeField($value): ?ArtistsDetail
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
