<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\Amazon\Synchronization\ListingsProducts\Update\Blocked;

class Requester extends \Ess\M2ePro\Model\Amazon\Connector\Inventory\Get\Blocked\ItemsRequester
{
    //########################################

    protected function getProcessingRunnerModelName()
    {
        return 'Amazon\Synchronization\ListingsProducts\Update\Blocked\ProcessingRunner';
    }

    protected function getResponserParams()
    {
        return array_merge(
            parent::getResponserParams(),
            array(
                'request_date' => $this->getHelper('Data')->getCurrentGmtDate(),
            )
        );
    }

    //########################################
}