<?php

declare(strict_types=1);

namespace Nofarius1992\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Nofarius1992\Blog\Model\ResourceModel\Category as ResourceModel;

/**
 * Blog category model
 */
class Category extends AbstractModel
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
