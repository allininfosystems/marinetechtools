<?php
namespace Ess\M2ePro\Block\Adminhtml\Order\Item\Product\Mapping\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Order\Item\Product\Mapping\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Order\Item\Product\Mapping\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\Config\Manager\Cache $cacheConfig, \Magento\Catalog\Model\Product\Type $productTypeModel, \Magento\Catalog\Model\Product $productModel, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($cacheConfig, $productTypeModel, $productModel, $context, $backendHelper, $data);
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
