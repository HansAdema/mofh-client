<?php

namespace HansAdema\MofhClient\Message;

class AvailabilityResponse extends AbstractResponse
{

    public function parseResponse()
    {
        $this->data = (string)$this->response->getBody();
    }

    public function getMessage()
    {
        return $this->getData();
    }

    public function isSuccessful()
    {
        return $this->data === '1';
    }
}