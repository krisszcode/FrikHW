<?php
if(isset($_POST['url'])){
    $url = $_POST['url'];
    $str = strip_tags(file_get_contents($url), "<script><style>");
}else{
    $str = strip_tags(file_get_contents('https://www.startlap.hu/'), "<script><style>");
}

$listOfWords = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $str);
$listOfWords = preg_replace('#<script.*/*>|</script>|<[a-zA-Z][^>]*=[\'"]+javascript:\w+.*[\'"]+>|<\w+[^>]*\son\w+=.*[ /]*>#', '', $listOfWords);



$listOfWords = explode(" ", $listOfWords);
array_shift($listOfWords);




$result = [];
for ($i=0; $i < sizeof($listOfWords); $i++) {
    if (strpos($listOfWords[$i], 'A') !== False || strpos($listOfWords[$i], 'a') !== False ) {
        array_push($result,$listOfWords[$i]);
    }
}


?>

<html>
<head>
</head>
<body>

<form action="" method="post">
    <input type="text" id="url" name="url"><br><br>
    <input type="submit" value="Submit">
</form>

<table>
    <style>
        table {
            display: block;
            width: 90%;
            margin: 3em auto;
        }

        tr {
            display: block;
            width: 150%;
            float: left;
            margin: 0;
            padding: 0;
        }

        td {
            display: inline-block;
            width: 11%;
            border: 1px solid #000;
        }
    </style>
    <tr>
        <?php
        $j = 0;
        do {
            echo "<td>$result[$j]</td>";
            $j += 1;
        } while ($j < 64);
        ?>
    </tr>
</table>
<script>
    var javaScriptVar = "<?php echo $listOfWords; ?>";
    alert(javaScriptVar);
</script>
</body>
</html>