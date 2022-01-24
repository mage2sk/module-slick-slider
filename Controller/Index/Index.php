<?php

/**
 * Mage2sk Use Slick slider in Magento 2
 *
 * @package      Mage2sk_SlickSlider
 * @author       Kishan Savaliya <kishansavaliyakb@gmail.com>
 */

namespace Mage2sk\SlickSlider\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Mage2sk Slick slider demo'));

        return $resultPage;
    }
}
