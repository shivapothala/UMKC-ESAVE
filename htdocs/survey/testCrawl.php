<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$amount = 0;
// Include the library
	include('C:/xampp/htdocs/simple_html_dom.php');
 	
// Retrieve the DOM from a given URL
	$html = file_get_html("https://ala.kcpl.com/ala/mysmartGrid.cfm?cfid=8931625&cftoken=69872513&SGNotAvail=N");

	
// Find all "A" tags and print their HREFs
//	foreach($html->find('a') as $e) 
 //   echo $e->href . '<br>';

// Retrieve all images and print their SRCs
//	foreach($html->find('img') as $e)
 //   echo $e->src . '<br>';

// Find all images, print their text with the "<>" included
//	foreach($html->find('img') as $e)
 //   echo $e->outertext . '<br>';

// Find the DIV tag with an id of "myId"
//	foreach($html->find('div#myId') as $e)
//    echo $e->innertext . '<br>';

// Find all SPAN tags that have a class of "myClass"
//	foreach($html->find('span.myClass') as $e)
//    echo $e->outertext . '<br>';

// Find all TD tags with "align=center"
//	foreach($html->find('td[align=center]') as $e)
//    echo $e->innertext . '<br>';
    
// Extract all text from a given cell

	//echo $html->find('&nbsp', 1)->plaintext.'<br><hr>';
	//echo $html->find('&nbsp', 2)->plaintext.'<br><hr>';
	//echo $html->find('&nbsp', 3)->plaintext.'<br><hr>';

	echo $html->find('td[class="col-alt1"]', 1)->plaintext.'<br><hr>';
	//echo $html->find('td[class="col-alt1"]', 2)->plaintext.'<br><hr>';
	echo $html->find('td[class="col-alt1"]', 3)->plaintext.'<br><hr>';
	 
	 $amount = $html->find('td[class="col-alt1"]', 2)->plaintext.'<br>';
	 echo $amount;
	// Dump contents (without tags) from HTML
	//echo file_get_html('https://ala.kcpl.com/ala/mysmartGrid.cfm?cfid=8886730&cftoken=68850060&SGNotAvail=N')->plaintext;
    ?>
</body>
</html>