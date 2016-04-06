#!/usr/bin/env php
<?php
/**
 * Project: FreelancerBidder
 *
 * @author Amado Martinez <amado@projectivemotion.com>
 */

require __DIR__ . '/../vendor/autoload.php';


$app    = new \projectivemotion\FreelancerBidder\Application();
$app->run();