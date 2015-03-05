<?php

namespace FBS\Model;

class CreateReservation
{

    /**
     * @var string Identifies the bibliographical record to reserve - DBC OpenSearch:
     * //searchresult/collection/object/identifier
     * @required
     */
    public $recordId = null;

    /**
     * @var string The date where the patron is no longer interested in the reserved
     * material.
     *  If not set, a date will be calculated from the agency default interest period
     */
    public $expiryDate = null;

    /**
     * @var string ISIL-number of pickup branch.
     *  If not set, will default to patrons preferred pickup branch
     */
    public $pickupBranch = null;


}

