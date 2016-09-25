<?php

namespace Rebing\Soccerama\Requests;


use Carbon\Carbon;

trait Match {

    /**
     * Accepts dates as Carbon or 'YYYY-mm-dd' strings
     */
    public function matchesByDate($fromDate, $toDate)
    {
        if($fromDate instanceof Carbon)
        {
            $fromDate->format('Y-m-d');
        }
        if($toDate instanceof Carbon)
        {
            $toDate->format('Y-m-d');
        }

        return $this->get('matches/' . $fromDate . '/' . $toDate)->data;
    }

    public function matchById($matchId)
    {
        return $this->get('matches/' . $matchId);
    }

}