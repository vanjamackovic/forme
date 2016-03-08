<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Naslov </title>
</head>
<body>
<hl> Prvi</hl>
<p>
    <?php
    echo('Pozdrav is PHP-a.');
    echo('<br>');
    echo(date('d.m.Y.'));
    ?>
</p>
<p>
    <?php
	$date1 = ('d.m.Y.');
	$date2 = ('18.03.2016.');
	$diff = $date2 - $date1;
    echo('Do praznika je ostalo još: <b>'.$diff.'</b>');
    ?>
</p>
</body>
</html>
