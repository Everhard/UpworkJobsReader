# UpworkJobsReader

[![Latest Stable Version](https://poser.pugx.org/steadfast/upwork-jobs-reader/v/stable)](https://packagist.org/packages/steadfast/upwork-jobs-reader)
[![Total Downloads](https://poser.pugx.org/steadfast/upwork-jobs-reader/downloads)](https://packagist.org/packages/steadfast/upwork-jobs-reader)
[![License](https://poser.pugx.org/steadfast/upwork-jobs-reader/license)](https://packagist.org/packages/steadfast/upwork-jobs-reader)

Upwork Jobs Reader.

## Installation
```composer log
php composer require steadfast/upwork-jobs-reader
```

## Usage
```php
$reader = UpworkJobsReader;
$jobs = $reader->fetchJobs();

foreach($jobs as $job) {
  echo $job['title'];
}
```