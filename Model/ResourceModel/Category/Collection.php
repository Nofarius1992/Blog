<?php

declare(strict_types=1);

namespace Nofarius1992\Blog\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Nofarius1992\Blog\Model\Category as Model;
use Nofarius1992\Blog\Model\ResourceModel\Category as ResourceModel;

/**
 * Class collection category.
 */
class Collection extends AbstractCollection
{

    public $_idFieldName = 'category_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
