<?php

namespace App;
use Exception;

class DHLTracker {
    private $trackingNumber;
    private $apiKey;

    public function __construct($trackingNumber, $apiKey) {
        $this->trackingNumber = $trackingNumber;
        $this->apiKey = $apiKey;
    }

    /**
     * @throws Exception
     */
    public function trackShipment() {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api-eu.dhl.com/track/shipments?trackingNumber=" . $this->trackingNumber);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "DHL-API-Key: " . $this->apiKey
        ));

        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }

        curl_close($ch);

        return $response;
    }
}