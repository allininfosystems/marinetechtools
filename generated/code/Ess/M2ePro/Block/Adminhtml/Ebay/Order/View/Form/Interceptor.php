<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Form;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Form
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Order\View\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Tax\Model\Calculation $taxCalculator, \Magento\Store\Model\StoreManager $storeManager, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Widget $context, array $data = array())
    {
        $this->___init();
        parent::__construct($taxCalculator, $storeManager, $context, $data);
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
