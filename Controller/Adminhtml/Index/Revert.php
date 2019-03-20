<?php
/**
 * Created by PhpStorm.
 * User: jbritts
 * Date: 3/5/19
 * Time: 4:40 PM
 */
namespace MagentoEse\MsiInventorySampleDataDemo\Controller\Adminhtml\Index;

use MagentoEse\MsiInventorySampleDataDemo\Model\EnableDemoInventory;

class Revert extends \Magento\Backend\App\Action
{

    /** @var \Magento\Framework\View\Result\PageFactory  */
    protected $_pageFactory;

    /** @var EnableDemoInventory  */
    protected $enableDemoInventory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        EnableDemoInventory $enableDemoInventory)
    {
        $this->enableDemoInventory = $enableDemoInventory;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->enableDemoInventory->apply();
        echo "Done";
        exit;
    }

}