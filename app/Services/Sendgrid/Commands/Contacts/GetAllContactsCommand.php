<?php

namespace App\Services\Sendgrid\Commands\Contacts;

use App\Services\Sendgrid\RequestSendCommand;
use App\Services\Sendgrid\Requests\GetRequest;

class GetAllContactsCommand extends RequestSendCommand
{
    /**
     * GetAllListsCommand constructor.
     */
    public function __construct()
    {
        parent::__construct(new GetRequest('/marketing/contacts'));
    }
}