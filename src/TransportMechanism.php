<?php

namespace DataDog;

interface TransportMechanism
{
    /**
     * @return bool
     */
    public function sendMessage($message);
}
