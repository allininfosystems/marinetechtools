<?php
namespace Dsync\Dsync\Controller\Adminhtml\Process\Dismiss;

/**
 * Interceptor class for @see \Dsync\Dsync\Controller\Adminhtml\Process\Dismiss
 */
class Interceptor extends \Dsync\Dsync\Controller\Adminhtml\Process\Dismiss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Dsync\Dsync\Helper\Data $helper, \Dsync\Dsync\Model\ProcessFactory $processFactory)
    {
        $this->___init();
        parent::__construct($context, $helper, $processFactory);
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
