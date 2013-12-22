<!DOCTYPE html>
<?php
// $url = 'http://hwcdn.themoviedb.org/posters/304/4bc91347017a3c57fe007304/transformers-original.jpg';
// $img = '/my/folder/poster.jpg';
// file_put_contents($img, file_get_contents($url));
print "File will put into fs.";

$ch = curl_init('http://hwcdn.themoviedb.org/posters/304/4bc91347017a3c57fe007304/transformers-original.jpg');
$fp = fopen('/home/dqzxiajy/poster.jpg', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
print "File put into fs.";

?>