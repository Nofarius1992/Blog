<?php

namespace Nofarius1992\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Category extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('nofarius1992_blog_category', 'category_id');
    }
}
