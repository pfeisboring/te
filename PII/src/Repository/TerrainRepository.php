<?php

namespace App\Repository;
use App\Entity\Terrain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Data\SearchData;


/**
 * @method Terrain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Terrain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Terrain[]    findAll()
 * @method Terrain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TerrainRepository  extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Terrain::class);
    }

    /**
     * @return Terrain[]
     */
    public function findSearch(SearchData $search): array
    {
        $query = $this->createQueryBuilder('Terrain')->select('Terrain');

        if ($search->q) {
            $query =
                $query
                    ->where('Terrain.typeterrain LIKE :SearchData')
                    ->setParameter('SearchData', '%' . $search->q . '%');

        }


        return $query->getQuery()->getResult();
    }
}
//    public function trierwalid()
//    {
//        return $this->createQueryBuilder('Terrain')
//            ->orderBy('Terrain.typeterrain', 'ASC')
//            ->getQuery()
//            ->getResult();
//    }


