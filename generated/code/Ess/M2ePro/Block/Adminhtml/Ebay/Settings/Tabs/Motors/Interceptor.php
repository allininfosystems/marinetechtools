<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Settings\Tabs\Motors;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Settings\Tabs\Motors
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Settings\Tabs\Motors implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeColFactory, \Ess\M2ePro\Model\ActiveRecord\Component\Parent\Ebay\Factory $ebayFactory, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($attributeColFactory, $ebayFactory, $resourceConnection, $context, $registry, $formFactory, $data);
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
