<?php
declare(strict_types=1);

namespace Nofarius1992\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Blog category resource model
 */
class Category extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('nofarius1992_blog_category', 'category_id');
    }
}
