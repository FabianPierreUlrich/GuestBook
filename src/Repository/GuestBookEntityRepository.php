<?php

namespace App\Repository;

use App\Entity\GuestBookEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GuestBookEntity>
 *
 * @method GuestBookEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method GuestBookEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method GuestBookEntity[]    findAll()
 * @method GuestBookEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuestBookEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GuestBookEntity::class);
    }

//    /**
//     * @return GuestBookEntity[] Returns an array of GuestBookEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GuestBookEntity
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
