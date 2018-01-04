<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Item;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Item
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product $productModel, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Model\ActiveRecord\Component\Parent\Ebay\Factory $ebayFactory, \Magento\Tax\Model\Calculation $taxCalculator, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($productModel, $resourceConnection, $ebayFactory, $taxCalculator, $context, $backendHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function __()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__');
        if (!$pluginInfo) {
            return parent::__();
        } else {
            return $this->___callPlugins('__', func_get_args(), $pluginInfo);
        }
    }
}
