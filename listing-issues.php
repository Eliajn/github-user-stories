<?php

require_once(__DIR__ . '/vendor/autoload.php');

$owner = '';
$repo = '';

$client = new GitHubClient();

$client->setPage(2);// specify the page number.
$client->setPageSize(2);// set the limit to the fetched issues.
$issues = $client->issues->listIssues($owner, $repo);//fetch the issues.

foreach ($issues as $issue)
{
    /* @var $issue GitHubIssue */
    echo get_class($issue) . "[" . $issue->getNumber() . "]: " . $issue->getTitle() . "\n";
}

?>
