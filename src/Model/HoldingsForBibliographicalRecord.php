<?php

namespace FBS\Model;

class HoldingsForBibliographicalRecord
{

    /**
     * @var string Identifies the bibliographical record for the available material,
     *  DBC OpenSearch: //searchresult/collection/object/identifier
     * @required
     */
    public $recordId = null;

    /**
     * @var boolean True if there is any reservable material
     * @required
     */
    public $reservable = null;

    /**
     * @var Holdings[] An array of holdings for the material matching the
     * bibliographical record, as distributed across branches,
     *  departments and locations
     * @required
     */
    public $holdings = null;


}

