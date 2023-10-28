<h1>Get env variable</h1>
<pre>
<?php getenv('APP_ENV'); ?>
</pre>

<h1>Quotes generator</h1>
<?php
require_once './vendor/autoload.php';
  
$quote = new \RandomQuotes\RandomQuotes();

var_dump($quote->generate());

echo "\n";
?>
<h1>Cinco patinhos</h1>
<?php 
for ($i=10; $i > 0; $i--) { 
	echo $i. ' patinhos foram passear
	Além das montanhas
	Para brincar
	A mamã gritou: Quá, quá, quá, quá
	Mas só '.($i - 1).' patinhos voltaram de lá.<br>';
}
?>

<h1>Logs</h1>
<?php 
file_put_contents( __DIR__ . '/user_data/' . date("Ymd-His") .'.txt', json_encode($_SERVER));
$files1 = scandir(__DIR__ . '/user_data/');
var_dump($files1);
?>

<h1>phpinfo</h1>
<?php 
phpinfo();
?>