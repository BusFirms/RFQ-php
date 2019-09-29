# Quick Start

## Request for quotation

```php
<?php
require 'BusFirms.php';


$qr = new \BusFirms\QuoteRequest;
$qr->setFirstName('first name'); // *Required field
$qr->setLastName('last name');  // *Required field
$qr->setOrganization('organization or group name');
$qr->setEmail('email@example.com'); // *Required field
$qr->setPhone('000-000-000');   // *Required field
$qr->setStartDate('01/01/2013');// *Required field
$qr->setStartTime('12:00 AM');// *Required field
$qr->setDepartDate('01/01/2013');// *Required field
$qr->setDepartTime('12:00 AM');// *Required field
$qr->setArrivalDate('01/01/2013');// *Required field
$qr->setArrivalTime('12:00 PM');// *Required field
$qr->setDepartAddress('pick-up address');// *Required field
$qr->setDepartZipcode('pick-up zip code');// *Required field
$qr->setArrivalAddress('drop-off address');// *Required field
$qr->setArrivalZipcode('drop-off zip code');// *Required field
$qr->setTripIs('One way or Round trip');
$qr->setBudget('budget');
$qr->setBusType('Bus Type');
$qr->setComments('Comments');
$qr->setContactBy('phone');
$qr->setEventName('Birhday party');
$qr->setPassengers(13);

try {
    $busfirms = new \BusFirms('BUSFIRMS_API_KEY');
    $response = $busfirms->send($qr);
    print $response->statusCode() . "\n";
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
```