<?php

namespace BusFirms;

class QuoteRequest
{
    private $first_name;
    private $last_name;
    private $organization;
    private $email;
    private $phone;
    private $s_date;
    private $d_date;
    private $d_time;
    private $a_date;
    private $a_time;
    private $d_address;
    private $d_zipcode;
    private $a_address;
    private $a_zipcode;
    private $trip_is;
    private $budget;
    private $bus_type;
    private $comments;
    private $contact_by;
    private $event_name;
    private $passengers;
    private $header_list = array();

    protected $use_headers;

  
    /**
     * getFirstName
     * Return the string of client first name
     * @return string of first name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * setFirstName
     * Initialize a string for the client 'first_name' field
     * Destroy previous client 'first_name' data.
     * @param Sting $first_name - a string of client first name
     * @return the BusFirms\Api object.
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }


    /**
     * getLastName
     * Return the string of client last name
     * @return string of last name
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
      * setFirstName
      * Initialize a string for the client 'last_name' field
      * Destroy previous client 'lastt_name' data.
      * @param Sting $last_name - a string of client first name
      * @return the BusFirms\Api object.
    */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }


    /**
     * getOrganization
     * Return the string of organization name
     * @return Sting of organization name
    */
    public function getOrganization()
    {
        return $this->organization;
    }
  
    /**
    * setOrganization
    * Initialize a string for the client 'organization' field
    * Destroy previous client 'organization' data.
    * @param Sting $organization - a string of client organization name
    * @return the BusFirms\Api object.
    */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }


    /**
     * getEmail
     * Return the string of email address
     * @return Sting of organization name
    */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
    * setEmail
    * Initialize a string for the client 'email' field
    * Destroy previous client 'email' data.
    * @param Sting $email - a string of email address
    * @return the BusFirms\Api object.
    */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    /**
     * getPhone
     * Return the string of phone number
     * @return Sting of phone number
    */
    public function getPhone()
    {
        return $this->phone;
    }
  
    /**
    * setPhone
    * Initialize a string for the client 'phone' field
    * Destroy previous client 'phone' data.
    * @param Sting $phone - a string of phone number
    * @return the BusFirms\Api object.
    */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }


    /**
     * getStartDate
     * Return the string of date
     * @return Sting of date
    */
    public function getStartDate()
    {
        return $this->s_date;
    }
  
    /**
    * setStartDate
    * Initialize a string for the client 's_date' field
    * Destroy previous client 's_date' data.
    * @param Sting $date - a string of date
    * @return the BusFirms\Api object.
    */
    public function setStartDate($date)
    {
        $this->s_date = $date;
        return $this;
    }

    /**
     * getStartTime
     * Return the string of time
     * @return Sting of time
    */
    public function getStartTime()
    {
        return $this->s_time;
    }
  
    /**
    * setStartTime
    * Initialize a string for the client 's_time' field
    * Destroy previous client 's_time' data.
    * @param Sting $time - a string of time
    * @return the BusFirms\Api object.
    */
    public function setStartTime($time)
    {
        $this->s_time = $time;
        return $this;
    }
  
    /**
     * getDepartDate
     * Return the string of date
     * @return Sting of date
    */
    public function getDepartDate()
    {
        return $this->d_date;
    }
  
    /**
    * setDepartDate
    * Initialize a string for the client 'd_date' field
    * Destroy previous client 'd_date' data.
    * @param Sting $date - a string of date
    * @return the BusFirms\Api object.
    */
    public function setDepartDate($date)
    {
        $this->d_date = $date;
        return $this;
    }

    /**
     * getDepartTime
     * Return the string of time
     * @return Sting of time
    */
    public function getDepartTime()
    {
        return $this->d_time;
    }
  
    /**
    * setDeparTime
    * Initialize a string for the client 'd_time' field
    * Destroy previous client 'd_time' data.
    * @param Sting $time - a string of time
    * @return the BusFirms\Api object.
    */
    public function setDepartTime($time)
    {
        $this->d_time = $time;
        return $this;
    }
  
    /**
     * getArrivalDate
     * Return the string of date
     * @return Sting of date
    */
    public function getArrivalDate()
    {
        return $this->a_date;
    }
  
    /**
    * setArrivalDate
    * Initialize a string for the client 'a_date' field
    * Destroy previous client 'a_date' data.
    * @param Sting $date - a string of date
    * @return the BusFirms\Api object.
    */
    public function setArrivalDate($date)
    {
        $this->a_date = $date;
        return $this;
    }

    /**
     * getArrivalTime
     * Return the string of time
     * @return Sting of time
    */
    public function getArrivalTime()
    {
        return $this->a_time;
    }
  
    /**
    * setArrivalime
    * Initialize a string for the client 'a_time' field
    * Destroy previous client 'a_time' data.
    * @param Sting $time - a string of time
    * @return the BusFirms\Api object.
    */
    public function setArrivalTime($time)
    {
        $this->a_time = $time;
        return $this;
    }
  
    /**
   * getDepartAddress
   * Return the string of address
   * @return Sting of address
  */
    public function getDepartAddress()
    {
        return $this->d_address;
    }
  
    /**
    * setDepartAddress
    * Initialize a string for the client 'd_address' field
    * Destroy previous client 'd_address' data.
    * @param Sting $address - a string of address
    * @return the BusFirms\Api object.
    */
    public function setDepartAddress($address)
    {
        $this->d_address = $address;
        return $this;
    }

    /**
     * getDepartZipcode
     * Return the string of zipcode
     * @return Sting of zipcode
    */
    public function getDepartZipcode()
    {
        return $this->d_zipcode;
    }
  
    /**
    * setDeparZipcode
    * Initialize a string for the client 'd_zipcode' field
    * Destroy previous client 'd_zipcode' data.
    * @param Sting $zipcode - a string of zipcode
    * @return the BusFirms\Api object.
    */
    public function setDepartZipcode($zipcode)
    {
        $this->d_zipcode = $zipcode;
        return $this;
    }
  
    /**
     * getArrivalAddress
     * Return the string of address
     * @return Sting of address
    */
    public function getArrivalAddress()
    {
        return $this->a_address;
    }
  
    /**
    * setArrivalAddress
    * Initialize a string for the client 'a_address' field
    * Destroy previous client 'a_address' data.
    * @param Sting $address - a string of address
    * @return the BusFirms\Api object.
    */
    public function setArrivalAddress($address)
    {
        $this->a_address = $address;
        return $this;
    }

    /**
     * getArrivalZipcode
     * Return the string of zipcode
     * @return Sting of zipcode
    */
    public function getArrivalZipcode()
    {
        return $this->a_zipcode;
    }
  
    /**
    * setArrivalime
    * Initialize a string for the client 'a_zipcode' field
    * Destroy previous client 'a_zipcode' data.
    * @param Sting $zipcode - a string of zipcode
    * @return the BusFirms\Api object.
    */
    public function setArrivalZipcode($zipcode)
    {
        $this->a_zipcode = $zipcode;
        return $this;
    }


    /**
     * getTripIs
     * Return the string of zipcode
     * @return Sting of zipcode
    */
    public function getTripIs()
    {
        return $this->trip_is;
    }
  
    /**
    * setTripIs
    * Initialize a string for the client 'trip_is' field
    * Destroy previous client 'trip_is' data.
    * @param Sting $trip_is - a string of type of trip
    * @return the BusFirms\Api object.
    */
    public function setTripIs($trip_is)
    {
        $this->trip_is = $trip_is;
        return $this;
    }
 
    /**
     * getBudget
     * Return the float of budget
     * @return Float of budget
    */
    public function getBudget()
    {
        return $this->budget;
    }
  
    /**
    * setBudget
    * Initialize a float for the client 'budget' field
    * Destroy previous client 'budget' data.
    * @param Float $budget - a float of budget
    * @return the BusFirms\Api object.
    */
    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }


    /**
     * getBusType
     * Return the string of bus type
     * @return String of bus type
    */
    public function getBusType()
    {
        return $this->bus_type;
    }
  
    /**
    * setBusType
    * Initialize a string for the client 'bus_type' field
    * Destroy previous client 'bus_type' data.
    * @param Float $bus_type - a string of bus_type
    * @return the BusFirms\Api object.
    */
    public function setBusType($bus_type)
    {
        $this->bus_type = $bus_type;
        return $this;
    }


    /**
     * getComments
     * Return the string of comments
     * @return String of comments
    */
    public function getComments()
    {
        return $this->comments;
    }
  
    /**
    * setComments
    * Initialize a string for the client 'comments' field
    * Destroy previous client 'comments' data.
    * @param String $comments - a string of comments
    * @return the BusFirms\Api object.
    */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }


    /**
     * getContactBy
     * Return the string of contact_by
     * @return String of contact_by
    */
    public function getContactBy()
    {
        return $this->contact_by;
    }
  
    /**
    * setContactBy
    * Initialize a string for the client 'contact_by' field
    * Destroy previous client 'contact_by' data.
    * @param String $contact_by - a string of contact_by
    * @return the BusFirms\Api object.
    */
    public function setContactBy($contact_by)
    {
        $this->contact_by = $contact_by;
        return $this;
    }


    /**
     * getEventName
     * Return the string of event_name
     * @return String of event_name
    */
    public function getEventName()
    {
        return $this->event_name;
    }
  
    /**
    * setEventName
    * Initialize a string for the client 'event_name' field
    * Destroy previous client 'event_name' data.
    * @param String $event_name - a string of event_name
    * @return the BusFirms\Api object.
    */
    public function setEventName($event_name)
    {
        $this->event_name = $event_name;
        return $this;
    }


    /**
     * getPassengers
     * Return the int of passengers
     * @return Int of passengers
    */
    public function getPassengers()
    {
        return $this->passengers;
    }
  
    /**
    * setPassengers
    * Initialize an int for the client 'passengers' field
    * Destroy previous client 'passengers' data.
    * @param Int $passengers - a string of passengers
    * @return the BusFirms\Api object.
    */
    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;
        return $this;
    }
}
