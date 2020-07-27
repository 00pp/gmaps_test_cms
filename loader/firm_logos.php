<?php

// require '../src/config.php';
require '../vendor/autoload.php';

use duzun\hQuery;

class Model 
{	

	protected $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET;
	protected $opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

	protected $db;

	public function __construct()
	{
		$this->db = new PDO($this->dsn, DB_USER, DB_PASS, $this->opt);
	}

	public function cast($q) {

		$db = $this->db;
		
		$stmt = $db->prepare($q);
		$stmt -> execute();

		if (stripos($q, 'insert') !== false or stripos($q, 'update') !== false)
			return $db->lastInsertId();
		else
			return $stmt -> fetchAll();
	}

}

$db = new Model;

$q = 'select id, website_url from places where logo is null limit 100';
 


while ($items = $db->cast($q)) {
	foreach ($items as $i) {
		
		// echo $i['website_url']. '  - ';
		$i['website_url'] = trim($i['website_url']);

		echo '~';
		$html = @file_get_contents($i['website_url']);
		
		if (!$html)
			continue;

		$doc = hQuery::fromHTML($html);
		$img = $doc->find('img');

		if (!$img)
			continue;

		foreach ($img as $im) {
			$i_html = $im->outerHtml();

			preg_match('#logo#', $i_html, $ok);

			if (!empty($ok)) {
				$src = $im->attr('src');

				if (strpos($src, '//') == false) {
					// echo $i['website_url'].PHP_EOL;
					$domain = preg_replace('#htt.+?//#', '', $i['website_url']);
					$domain = preg_replace('#/.+#', '', $domain);
					$domain = preg_replace('#/$#', '', $domain);
					$src = preg_replace('#^/#', '', $src);
					$src = 'http://'.$domain.'/'.$src;
					// //[a-z0-9-]+\.[a-z0-9-]+\.[a-z\.]+/
				}

				echo $i['id']. ' - ' .$src.PHP_EOL;

			 
			    $check = @file_get_contents($src);
			    if ($check !== false) {
			    	$q = 'update places set logo = "'.trim($src).'" where id = "'.$i['id'].'"';
					$db->cast($q);
					echo '.';
				} else echo 'x';
		 
				continue 2;
			}
		}

	}
}







 