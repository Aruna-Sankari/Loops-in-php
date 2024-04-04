    <html>
	<head>
	<title>LOOPS</title>
	</head>
	<body>
	<h4><u>LOOP</u></h4>
    <h5>1.WHILE LOOP</h5>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }
    ?>

    <h5>2.DO WHILE LOOP</h5>
    <?php
    $i = 2;
    do {
        echo $i . "<br>";
        $i = $i + 2;
    }
    while ($i <= 20);
    echo "<br>";
    ?>

    <?php
    $a = 11;
    do {
        $a++;
        echo "The Value is:$a <br>";
    }
    while ($a <= 10);
    ?>

    <h5>3.FOR LOOP</h5>
    <?php
    for ($i = 1; $i <= 8; $i++) {
        echo $i . "<br>";
    }
    echo "<br>";
    ?>

    <?php
    echo "<h5>FOR LOOP IN REVERSE</h5>";
    for ($i = 10; $i >= 1; $i--) {
        echo $i . "<br>";
    }
    ?>

    <h5>4.FOREACH LOOP</h5>
    <?php
    $str = ["arun", "rani", "durga", "raju"];
    foreach ($str as $name) {
        echo $name . "<br>";
    }
    ?>
	</body>
	</html>