<?php
namespace Ess\M2ePro\Controller\Adminhtml\MigrationFromMagento1\Complete;

/**
 * Interceptor class for @see \Ess\M2ePro\Controller\Adminhtml\MigrationFromMagento1\Complete
 */
class Interceptor extends \Ess\M2ePro\Controller\Adminhtml\MigrationFromMagento1\Complete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Controller\Adminhtml\Context $context, \Ess\M2ePro\Setup\MigrationFromMagento1 $dbModifier)
    {
        $this->___init();
        parent::__construct($context, $dbModifier);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
