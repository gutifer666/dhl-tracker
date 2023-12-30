# DHLTracker PHP Package

## Description

The DHLTracker PHP package provides an easy-to-use, object-oriented interface for tracking shipments using the DHL API. It simplifies the process of sending requests to DHL and parsing the responses. This package is particularly useful for developers working on logistics, e-commerce, and any application where tracking DHL shipments is required.

## Features

- __Simple Tracking:__ Track DHL shipments using just the tracking number.
- __API Key Integration:__ Securely integrates with your DHL API key for authenticated requests.
- __Error Handling:__ Implements error handling for robust application development.
- __Flexible Responses:__ Retrieve tracking information in a structured format, making it easy to use within your application.
- __PSR-4 Autoloading:__ Conforms to PSR-4 standards for compatibility with modern PHP applications.

## Installation

The DHLTracker PHP package can be installed using [Composer](https://getcomposer.org/). Run this command:

```bash
composer require dhltracker/dhltracker
```

## Usage

### Tracking Shipments

To track a shipment, you will need to create a `DHLTracker` object and pass in your DHL API key and the tracking number. You can then call the `trackShipment()` method and this will return a `DHLTrackerResponse` object, which contains the tracking information.

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use DHLTracker\DHLTracker;

// Instantiate the DHLTracker class with your DHL tracking number and API key:

$tracker = new DHLTracker("YOUR_TRACKING_NUMBER", "YOUR_DHL_API_KEY");

// Then, use the trackShipment method to get the tracking information:

$response = $tracker->trackShipment();
echo $response;

?>
```

## Requirements

- PHP 7.4 or higher
- [Composer](https://getcomposer.org/)
- [DHL API Key](https://developer.dhl.com/)
- [cURL](https://www.php.net/manual/en/book.curl.php) extension for PHP

## Contributing

Contributions are welcome! Please see [CONTRIBUTING.md]() for more details.

## License

This package is licensed under the [MIT License](https://opensource.org/license/mit/)
