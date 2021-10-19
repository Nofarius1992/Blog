<?php

namespace Nofarius1992\Blog\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Nofarius1992\Blog\Model\Category as Model;
use Nofarius1992\Blog\Model\ResourceModel\Category as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
