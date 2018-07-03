<?php

namespace MailchimpAPI\Lists\Segments;

use MailchimpAPI\Lists\Segments;

/**
 * Class Members
 * @package MailchimpAPI\Lists\Segments
 */
class Members extends Segments
{
    /**
     * @var array
     */
    public $req_post_params = [
        'email_address'
    ];

    /**
     * the url component for this endpoint
     */
    const URL_COMPONENT = '/members/';

    /**
     * Members constructor.
     * @param $apikey
     * @param $parent_resource
     * @param $grandparent_resource
     * @param $class_input
     * @throws \MailchimpAPI\MailchimpException
     */
    public function __construct(
        $apikey,
        $parent_resource,
        $grandparent_resource,
        $class_input
    ) {
        parent::__construct($apikey, $parent_resource, $grandparent_resource);
        if ($class_input) {
            $this->request->appendToEndpoint(self::URL_COMPONENT . $class_input);
        } else {
            $this->request->appendToEndpoint(self::URL_COMPONENT);
        }
    }
}