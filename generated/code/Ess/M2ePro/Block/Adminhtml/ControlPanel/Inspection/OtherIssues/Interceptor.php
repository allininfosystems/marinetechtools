<?php
namespace Ess\M2ePro\Block\Adminhtml\ControlPanel\Inspection\OtherIssues;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\ControlPanel\Inspection\OtherIssues
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\ControlPanel\Inspection\OtherIssues implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\App\ResourceConnection $resourceConnection, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceConnection, $data);
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
