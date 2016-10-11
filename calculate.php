<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 10/1/15
 * Time: 8:12 PM
 *
 * A basic tip calculator
 */

// variables
$bill = $_GET['bill'];
$percent = $_GET['percent'];
$number = $_GET['number'];
$tip = $bill * $percent;
$subtotal = $bill + $tip;

// Handles division by zero
if ($number !=0 ) {
    $total = ($bill + $tip) / $number;
} else {
    $number = 1;
    $total = ($bill + $tip) / $number;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> A Tip Calculator</title>
        <link rel="stylesheet" type="text/css" href="calculator.css">
    </head>
        <body>
            <div id="content">
                <h1>A Tip Calculator</h1>
                <p><table id="table">
                    <tr>
                        <td class="left">Bill Amount:&nbsp;</td>
                        <td class="right">$<?php echo number_format($bill, 2); ?></td>
                    </tr>
                    <tr>
                        <td class="left">Tip Percentage:&nbsp;</td>
                        <td class="right"><?php echo ($percent * 100); ?> %</td>
                    </tr>
                    <tr>
                        <td class="left">Tip Total:&nbsp;</td>
                        <td class="right">$<?php echo number_format($tip, 2); ?></td>
                    </tr>
                    <td class="left">Bill Subtotal:&nbsp;</td>
                    <td class="right">$<?php echo number_format($subtotal, 2); ?></td>
                    <tr>
                        <td class="left">Number In Party:&nbsp;</td>
                        <td class="right"><?php echo ($number); ?></td>
                    </tr>
                <td class="left"><h4>Bill Total, Each Person:&nbsp;</h4></td>
                <td class="right"><h3>$<?php echo number_format($total, 2); ?></h3></td>
                </table>
                </p>
            </div>
        </body>
</html>
