<?php

namespace NotWes\LaravelVatusaApi;

class facility {

    public function __construct() {
        $this->apiKey = env('VATUSA_API_KEY');
    }

    public function getFacilities(){
        $facilities = file_get_contents('https://api.vatusa.net/v2/facility');
        $facilities = json_decode($facilities);
        $facilities = $facilities->data;

        return $facilities;
    }

    public function getFacilityInformation($facility){
        $facility = file_get_contents('https://api.vatusa.net/v2/facility/'.$facility);
        $facility = json_decode($facility);
        $facility = $facility->data;

        return $facility;
    }

    /**
     * Gets VATUSA Facility Roster
     * 
     * @param string $facility
     * @param string $membership
     * 
     * @return $roster
     */
    public function getRoster(string $facility, string $membership){
        if($this->apiKey){
            $roster = file_get_contents('https://api.vatusa.net/v2/facility/'.$facility.'/roster/'.$membership.'?apikey='.$this->apiKey);
        } else {
            $roster = file_get_contents('https://api.vatusa.net/v2/facility/'.$facility.'/roster/'.$membership);
        }
        $roster = json_decode($roster);
        $roster = $roster->data;

        return $roster;
    }

}