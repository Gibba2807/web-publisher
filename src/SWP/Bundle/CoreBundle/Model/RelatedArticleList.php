<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2019 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2019 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\Model;

class RelatedArticleList
{
    /**
     * @var ArticleInterface[]
     */
    private $relatedArticleItems = [];

    public function getArticles(): array
    {
        return $this->relatedArticleItems;
    }

    public function addRelatedArticleItem(RelatedArticleListItem $relatedArticleListItem): void
    {
        $this->relatedArticleItems[] = $relatedArticleListItem;
    }
}
