<html>
<head>
    <link rel="stylesheet" href="../assets/css/styles_blog.css">
</head>
<body>

<h1>The amount of ice you need to buy is:</h1>

<p class="results">
<?php
    // Constants
    $C_w = 4182; 	// [kJ/(kg,C)]
    $L_i = 334;	// [kJ/kg]

    // Form vairables
    $L_p = $_POST["L_p"];	 // [L]
    $T_p_i_F = $_POST["T_p_i_F"]; // [F]
    $T_p_f_F = $_POST["T_p_f_F"]; // [F]

    // Calculated variables
    $T_p_i = ($T_p_i_F-32)*5/9; // [C]
    $T_p_f = ($T_p_f_F-32)*5/9; // [C]
    $m_p = $L_p; 		// [kg]
    $dT_p = abs($T_p_f - $T_p_i); // [C]
    $dT_i = $T_p_f;		// [C]

    // Final output
    $m_i = ($m_p*$C_w*$dT_p)/($C_w*$dT_i + $L_i);

    echo round($m_i) . " kgs<br>";
    echo round($m_i*2.2) . " lbs<br>";
    echo round($m_i*2.2/7) . " 7-lb bags<br>";
    ?>
</p>
<img src="../assets/img/connor.jpg" alt="A true cowbow" style="width:70%">
<p>Enjoy being a cool cowboy!</p>

<a href="../../blog.html" class="button">Back</a>
<a href="../../index.html" class="button">Home</a>

</body>
</html>
