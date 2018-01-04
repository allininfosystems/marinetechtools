<?php
namespace Magento\Catalog\Model\ResourceModel\Product\Gallery;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Product\Gallery
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Product\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $metadataPool, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function createBatchBaseSelect($storeId, $attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createBatchBaseSelect');
        if (!$pluginInfo) {
            return parent::createBatchBaseSelect($storeId, $attributeId);
        } else {
            return $this->___callPlugins('createBatchBaseSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValueToEntity($valueId, $entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'bindValueToEntity');
        if (!$pluginInfo) {
            return parent::bindValueToEntity($valueId, $entityId);
        } else {
            return $this->___callPlugins('bindValueToEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertGallery($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertGallery');
        if (!$pluginInfo) {
            return parent::insertGallery($data);
        } else {
            return $this->___callPlugins('insertGallery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteGallery($valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteGallery');
        if (!$pluginInfo) {
            return parent::deleteGallery($valueId);
        } else {
            return $this->___callPlugins('deleteGallery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function duplicate($attributeId, $newFiles, $originalProductId, $newProductId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicate');
        if (!$pluginInfo) {
            return parent::duplicate($attributeId, $newFiles, $originalProductId, $newProductId);
        } else {
            return $this->___callPlugins('duplicate', func_get_args(), $pluginInfo);
        }
    }
}
