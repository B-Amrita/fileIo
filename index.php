<?php


$xmlNodes=simplexml_load_file("Books.xml") or die("Error:cannot create object");
print_r($xmlNodes);

echo "Read XML Nodes in a loop".PHP_EOL;

/*foreach ($xmlNodes as $book2){
    echo $book2['category']. PHP_EOL;
}*/

foreach ($xmlNodes->children() as $book){
    echo "Language: " .$book->title['lang']. "Title: ";
    echo $book->title;
    echo $book->price.PHP_EOL;
    
}
