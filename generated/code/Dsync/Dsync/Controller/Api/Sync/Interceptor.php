<?php
namespace Dsync\Dsync\Controller\Api\Sync;

/**
 * Interceptor class for @see \Dsync\Dsync\Controller\Api\Sync
 */
class Interceptor extends \Dsync\Dsync\Controller\Api\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Dsync\Dsync\Model\Api\Server $server, \Dsync\Dsync\Helper\Data $helper, \Dsync\Dsync\Model\Api\Route\Sync $entity)
    {
        $this->___init();
        parent::__construct($context, $server, $helper, $entity);
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