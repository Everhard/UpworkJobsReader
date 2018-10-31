# UpworkJobsReader

[![Latest Stable Version](https://poser.pugx.org/steadfast/upwork-jobs-reader/v/stable)](https://packagist.org/packages/steadfast/upwork-jobs-reader)
[![Total Downloads](https://poser.pugx.org/steadfast/upwork-jobs-reader/downloads)](https://packagist.org/packages/steadfast/upwork-jobs-reader)
[![License](https://poser.pugx.org/steadfast/upwork-jobs-reader/license)](https://packagist.org/packages/steadfast/upwork-jobs-reader)

Upwork Jobs Reader gives the ability to get the last 30 jobs from Upwork RSS feed.

## Installation
```composer log
php composer require steadfast/upwork-jobs-reader
```

## Usage
```php
$reader = UpworkJobsReader;
$jobs = $reader->fetchJobs();

foreach($jobs as $job) {
  echo $job->title;
  echo $job->link;
  echo $job->description;
  echo $job->created_date;
  echo $job->posted_date;
  echo $job->category
  echo $job->country;
  echo $job->skills;
  echo $job->budget;
}
```

## Filters
Sort by newest jobs:
``` php
$reader->setSortBy(UpworkJobsReader::SORT_NEWEST);
```

Sort by relevance jobs:
``` php
$reader->setSortBy(UpworkJobsReader::SORT_RELEVANCE);
```

Sort by client money spending:
``` php
$reader->setSortBy(UpworkJobsReader::SORT_CLIENT_SPENDING);
```

Sort by client rating:
``` php
$reader->setSortBy(UpworkJobsReader::SORT_CLIENT_RATING);
```