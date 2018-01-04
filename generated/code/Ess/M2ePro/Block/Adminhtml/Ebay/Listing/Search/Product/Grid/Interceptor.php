<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Search\Product\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Search\Product\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Search\Product\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\ResourceModel\Magento\Product\CollectionFactory $magentoProductCollectionFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Ess\M2ePro\Model\ActiveRecord\Component\Parent\Ebay\Factory $ebayFactory, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($magentoProductCollectionFactory, $localeCurrency, $ebayFactory, $resourceConnection, $context, $backendHelper, $data);
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