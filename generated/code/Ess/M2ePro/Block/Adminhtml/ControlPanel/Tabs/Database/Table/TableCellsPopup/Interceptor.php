<?php
namespace Ess\M2ePro\Block\Adminhtml\ControlPanel\Tabs\Database\Table\TableCellsPopup;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\ControlPanel\Tabs\Database\Table\TableCellsPopup
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\ControlPanel\Tabs\Database\Table\TableCellsPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Ess\M2ePro\Model\ControlPanel\Database\TableModelFactory $databaseTableFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $databaseTableFactory, $data);
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
