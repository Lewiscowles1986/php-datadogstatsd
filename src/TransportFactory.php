<?php

namespace DataDog;

interface TransportFactory
{
    /**
     * @return TransportMechanism
     */
    public function create();
}
