<?php
namespace Ess\M2ePro\Block\Adminhtml\Wizard\InstallationEbay\Installation\Registration\Content;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Wizard\InstallationEbay\Installation\Registration\Content
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Wizard\InstallationEbay\Installation\Registration\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Auth\Session $authSession, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($authSession, $context, $registry, $formFactory, $data);
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
