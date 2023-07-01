<?php
require './GitHubApi.php';

$token = '';
$userId = 'katchion13';
$gitHubApi = new GitHubApi($token, $userId);
$followings = $gitHubApi->getFollowings();

echo "<h2>${userId}がフォローしているユーザリスト</h2>";
foreach ($followings as $following) {
    echo '- '.$following.'<br>';
}
?>