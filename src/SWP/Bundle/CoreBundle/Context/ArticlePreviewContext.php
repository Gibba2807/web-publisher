<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2018 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2018 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\Context;

final class ArticlePreviewContext implements ArticlePreviewContextInterface
{
    /**
     * @var bool
     */
    private $isPreview = false;

    public function setIsPreview(bool $isPreview): void
    {
        $this->isPreview = $isPreview;
    }

    public function isPreview(): bool
    {
        return $this->isPreview;
    }
}
