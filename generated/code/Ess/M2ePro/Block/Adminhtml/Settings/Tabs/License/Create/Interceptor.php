<?php
namespace Ess\M2ePro\Block\Adminhtml\Settings\Tabs\License\Create;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Settings\Tabs\License\Create
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Settings\Tabs\License\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Source\Locale\Country $country, \Magento\Backend\Model\Auth\Session $authSession, \Magento\User\Model\User $user, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($country, $authSession, $user, $context, $registry, $formFactory, $data);
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
