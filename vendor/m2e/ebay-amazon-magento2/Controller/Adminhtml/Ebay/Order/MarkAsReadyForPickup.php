<?php

namespace Ess\M2ePro\Controller\Adminhtml\Ebay\Order;

use Ess\M2ePro\Controller\Adminhtml\Ebay\Order;

class MarkAsReadyForPickup extends Order
{
    public function execute()
    {
        if ($this->sendInStorePickupNotifications('ready_for_pickup')) {
            $this->messageManager->addSuccess(
                $this->__('Orders were successfully marked as Ready For Pickup.')
            );
        } else {
            $this->messageManager->addError(
                $this->__('Orders were not marked as Ready For Pickup.')
            );
        }

        return $this->_redirect($this->_redirect->getRefererUrl());
    }
}