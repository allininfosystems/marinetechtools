<?php
namespace Dsync\Dsync\Controller\Adminhtml\Process\MassRetry;

/**
 * Interceptor class for @see \Dsync\Dsync\Controller\Adminhtml\Process\MassRetry
 */
class Interceptor extends \Dsync\Dsync\Controller\Adminhtml\Process\MassRetry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Dsync\Dsync\Helper\Data $helper, \Dsync\Dsync\Model\ProcessFactory $processFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Dsync\Dsync\Model\ResourceModel\Process\CollectionFactory $processCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $helper, $processFactory, $filter, $processCollectionFactory);
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
