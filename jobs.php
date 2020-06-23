<?php
$limitMonths = 200;

require 'app/Models/Job.php';
require 'app/Models/Project.php';

$job1 = new job('PHP Developer','This was an awesome job');
$job1->months = 7;

$job2 = new job('Phyton Developer','This was an awesome job');
$job2->months = 12;

$job3 = new job('','This was an awesome job');
$job3->months = 14;

$project1 = new Project('hola' , 'como estas?');

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects = [
  $project1
];


function printElement($job) {
  if($job->visible == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
};