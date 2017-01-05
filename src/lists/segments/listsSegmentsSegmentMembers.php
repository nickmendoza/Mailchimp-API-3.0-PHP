<?php

class lists_segment_segment_members extends lists_segments {

    function __construct($apikey, $parent_resource, $grandparent_resource, $class_input)
    {
        parent::__construct($apikey, $parent_resource, $grandparent_resource);
        if(isset($class_input))
        {
            $this->url .= '/members/' . $class_input;
        } else 
        {
            $this->url .= '/members/';
        }

    }

	public function GET( $query_params = null)
    {
        $query_string = '';

        if (is_array($query_params)) 
        {
            $query_string = $this->construct_query_params($query_params);
        }

        $url = $this->url . $query_string;
        $response = $this->curl_get($url);

        return $response;
    }

    public function POST( $member_hash )
    {
    	$params = array('id' => $member_hash);
    	$payload =  json_encode($params);

    	$url = $this->url;
        $response = $this->curl_post($url, $payload);

        return $response;
    }

	public function DELETE()
    {
        $url = $this->url;
        $response = $this->curl_delete($url);

        return $response;
    }

}