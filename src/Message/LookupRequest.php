<?php

namespace Omnipay\Cardknox\Message;

/**
 * Cardknox  Authorize Request
 */
class LookupRequest extends AbstractRequest
{

    protected $action = 'report:transactions';

    public function getData()
    {
        $data = $this->getBaseData();
        $data['xIP'] = $this->getClientIp();
        $data['xRefNum'] = $this->getTransactionReference();
        $data['xInvoice'] = $this->getInvoice();
        return $data;
    }

}
