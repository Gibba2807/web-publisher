<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Content Bundle.
 *
 * Copyright 2016 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2016 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\ContentBundle\Provider;

use Doctrine\Common\Collections\Collection;
use SWP\Component\Common\Criteria\Criteria;
use SWP\Bundle\ContentBundle\Model\ArticleInterface;

interface ArticleProviderInterface
{
    /**
     * Gets the article by id.
     *
     * @param $id
     *
     * @return ArticleInterface
     */
    public function getOneById($id);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getParent($id);

    /**
     * @param string $routeIdentifier
     * @param array  $order
     *
     * @return object
     */
    public function getRouteArticlesQuery(string $routeIdentifier, array $order);

    /**
     * @param Criteria $criteria
     *
     * @return ArticleInterface
     */
    public function getOneByCriteria(Criteria $criteria): ArticleInterface;

    /**
     * @param Criteria $criteria
     * @param array    $sorting
     *
     * @return Collection
     */
    public function getManyByCriteria(Criteria $criteria, array $sorting): Collection;

    /**
     * @param Criteria $criteria
     *
     * @return int
     */
    public function getCountByCriteria(Criteria $criteria): int;
}
