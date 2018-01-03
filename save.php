<?php


require_once(__DIR__.'/vendor/autoload.php');//include the file if not included.(check and then include.)

$featureTitle=$_POST['feature_title'];
$featureDescription=$_POST['feature_description'];

$owner = '';
$repo = '';
$username='';
$password='';
$client = new GitHubClient();
$client->setCredentials($username, $password);


$milestone=$client->issues->milestones->createMilestone($owner, $repo, $featureTitle, $featureDescription, $state = null, $due_on = null);
$label=['scenario'];

foreach ($_POST['scenarios'] as $scenario){
    $scenarioTitle=$scenario['title'];
    $scenarioDescription=$scenario['description'];
    $client->issues->createAnIssue($owner, $repo, $scenarioTitle, $scenarioDescription, $assignee = null, $milestone->getNumber(), $label);

}
