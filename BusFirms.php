<?php
require_once  'QuoteRequest.php';


class BusFirms
{
    protected $domain = "https://www.busfirms.com/";
    protected $endpoint = "api/quote";

    protected $token;
    protected $body;
    protected $info;

    public function __construct($token)
    {
        $this->token = $token;
    }
    
    /**
     * _prepData
     * Return the list of requested quote
     * @param  QuoteRequest  $quote - The requested quote to send
     * @return String the json of requested quote
     */
    protected function _prepData(BusFirms\QuoteRequest $quote)
    {
        $params = [
            'api_key' => $this->token,
            'first_name' => $quote->getFirstName(),
            'last_name' => $quote->getLastName(),
            'organization' => $quote->getOrganization(),
            'email' => $quote->getEmail(),
            'phone' => $quote->getPhone(),
            's_date' => $quote->getStartDate(),
            's_time' => $quote->getStartTime(),
            'd_date' => $quote->getDepartDate(),
            'd_time' => $quote->getDepartTime(),
            'a_date' => $quote->getArrivalDate(),
            'a_time' => $quote->getArrivalTime(),
            'd_address' => $quote->getDepartAddress(),
            'd_zipcode' => $quote->getDepartzipcode(),
            'a_address' => $quote->getArrivalAddress(),
            'a_zipcode' => $quote->getArrivalzipcode(),
            'trip_is' => $quote->getTripIs(),
            'budget' => $quote->getBudget(),
            'bus_type' => $quote->getBusType(),
            'comments' => $quote->getComments(),
            'contact_by' => $quote->getContactBy(),
            'event_name' => $quote->getEventName(),
            'passengers' => $quote->getPassengers(),

        ];

        return json_encode($params);
    }

    /**
   * send
   * Send a quote
   * @param  QuoteRequest   $quote - requested quote to send
   * @return String the json response
   */
    public function send(BusFirms\QuoteRequest $quote)
    {
        $data = $this->_prepData($quote);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->domain.$this->endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json"));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // ask for results to be returned
  
        // Send to remote and return data to caller.Array
        $this->body = curl_exec($ch);
        $this->info = curl_getinfo($ch);
        curl_close($ch);
        return $this;
    }

    public function statusCode()
    {
        if (empty($this->info['http_code'])) {
            die("No HTTP code was returned");
        } else {
            // echo results
            return $this->info['http_code'];
        }
    }

    public function body()
    {
        return $this->body;
    }
}
