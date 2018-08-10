<?php

class UpworkJobsReader
{
    const RSS_FEED_URL = 'https://www.upwork.com/ab/feed/jobs/rss';

    const JOB_TYPE_ALL      = 'all';
    const JOB_TYPE_HOURLY   = 'hourly';
    const JOB_TYPE_FIXED    = 'fixed';

    const EXPERIENCE_LEVEL_ALL          = 0;
    const EXPERIENCE_LEVEL_ENTRY        = 1;
    const EXPERIENCE_LEVEL_INTERMEDIATE = 2;
    const EXPERIENCE_LEVEL_EXPERT       = 3;

    const SORT_NEWEST           = 'renew_time_int';
    const SORT_RELEVANCE        = 'relevance';
    const SORT_CLIENT_SPENDING  = 'client_total_charge';
    const SORT_CLIENT_RATING    = 'client_rating';

    /*
     * Default values:
     */
    private $job_type           = self::JOB_TYPE_ALL;
    private $experience_level   = self::EXPERIENCE_LEVEL_ALL;
    private $sort               = self::SORT_NEWEST;

    public function __construct($options = [])
    {
        $this->setOptions($options);
    }

    public function fetchJobs()
    {
        $jobs = [];

        $feed = Feed::loadRss(self::RSS_FEED_URL);

        foreach ($feed->item as $item) {
            $jobs[] = [
                'title' => (string) $item->title,
            ];
        }

        return $jobs;
    }

    private function setOptions($options = [])
    {
        foreach ($options as $name => $value) {
            if (property_exists(self::class, $name)) {
                $this->{$name} = $value;
            }
        }
    }

    private function getCompiledUrl()
    {
        return self::RSS_FEED_URL;
    }
}