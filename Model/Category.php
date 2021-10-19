<?php

namespace Nofarius1992\Blog\Model;

use Nofarius1992\Blog\Model\ResourceModel\Category as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
