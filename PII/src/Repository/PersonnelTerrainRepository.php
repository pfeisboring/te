<?php

namespace App\Repository;
use App\Data\SearchDataa;
use App\Entity\PersonnelTerrain;
use App\Entity\PersonnelTerrainTerrain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
//use App\Data\SearchData;


/**
 * @method PersonnelTerrain|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonnelTerrain|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonnelTerrain[]    findAll()
 * @method PersonnelTerrain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class PersonnelTerrainRepository  extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonnelTerrain::class);
    }

    /**
     * @return PersonnelTerrain[]
     */
    public function findSearchh(SearchData $search): array
    {
        $query = $this->createQueryBuilder('PersonnelTerrain')->select('PersonnelTerrain');

        if ($search->q) {
            $query =
                $query
                    ->where('PersonnelTerrain.nom LIKE :SearchData')
                    ->setParameter('SearchData', '%' . $search->q . '%');

        }


        return $query->getQuery()->getResult();
    }



    /**
     *@return PersonnelTerrain[]
     */
    public function findSearch(SearchDataa $searchh ) : array
    {
        $query = $this->createQueryBuilder('r')->select('r');


        if ($searchh->q || $searchh->p) {
            $query =
                $query
                    ->where('r.nom LIKE :q')
                    ->setParameter('q', '%' . $searchh->q . '%')
                    ->andWhere('r.poste LIKE :p')
                    ->setParameter('p', '%' . $searchh->p . '%');
        }


        return $query->getQuery()->getResult();
    }
}















//    public function trierwalid()
//    {
//        return $this->createQueryBuilder('personnelterrain')
//            ->orderBy('personnelterrain.nom', 'ASC')
//            ->getQuery()
//            ->getResult();
//    }



