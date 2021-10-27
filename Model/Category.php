<?php
declare(strict_types=1);

namespace Nofarius1992\Blog\Model;

use Nofarius1992\Blog\Model\ResourceModel\Category as ResourceModel;
use Magento\Framework\Model\AbstractModel;

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
