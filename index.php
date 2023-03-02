
<?php
$a=["Shuvendu","archit","karan"];
print_r (array_values($a));

 echo "<br>";
echo strlen("<p> lorem ipsum  dummy text </p>");
 echo "<br>";
echo str_word_count("<p> lorem ipsum  dummy text </p>"); 
echo "<br>";
echo strrev("<p> lorem ipsum  dummy text </p>");
echo "<br>";
echo strpos("<p> lorem ipsum  dummy text </p>","lorem");
echo "<br>";
echo str_replace("lorem", "good morning", "<p> lorem ipsum  dummy text </p>");
$abc=100;
 echo "hello world " . $abc;
echo "<br>";
 echo implode(" ",$a);
echo "<br>";
$b="hello good morning PHP";
 print_r (explode(" ",$b));
echo "<br>";

 print_r (explode(" ",$b,1));
echo "<br>";
 print_r (explode(" ",$b,2));
echo "<br>";
 print_r (explode(" ",$b,-1));
echo "<br>";
 print_r (explode(" ",$b,-2));
?>


