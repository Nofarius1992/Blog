<?php

declare(strict_types=1);

namespace Nofarius1992\Blog\Controller\Adminhtml\Categories;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    private const MENU_ID = 'Nofarius1992_Blog::blog_categories';

    private PageFactory $resultPageFactory;

    /**
     * @inheritDoc
     */
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(static::MENU_ID);
        $resultPage->getConfig()->getTitle()->prepend(__('Categories'));

        return $resultPage;
    }
}
