<?php

namespace FOQ\ElasticaBundle\Provider;

class DoctrineMongoDBProvider extends AbstractDoctrineProvider
{
    /**
     * Counts the objects of a query builder
     *
     * @param queryBuilder
     * @return int
     **/
    protected function countObjects($queryBuilder)
    {
        return $queryBuilder->getQuery()->count();
    }

    /**
     * Fetches a slice of objects
     *
     * @param queryBuilder
     * @param int limit
     * @param int offset
     * @return array of objects
     **/
    protected function fetchSlice($queryBuilder, $limit, $offset)
    {
        return $queryBuilder->limit($limit)->skip($offset)->getQuery()->execute()->toArray();
    }
}