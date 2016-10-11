<!-- *
* Mike Le-Reiver
* 2016.10.01
*
* A basic tip calculator
* Written in PHP and HTML
  -->
<!DOCTYPE html>
<html>
    <head>
        <title>A Tip Calculator</title>
        <link rel="stylesheet" type="text/css" href="calculator.css">
    </head>
    <body>
    <div id="content">
        <h1>A Tip Calculator</h1>
            <form method="get" action="calculate.php">
                <table id="table">
                    <tr>
                        <td class="left">Enter complete bill amount&nbsp;</td>
                        <td><input type="text" name="bill"></td>
                    </tr><tr>
                        <td class="left">Spitting? Enter number of people&nbsp;</td>
                        <td style="height:1em;"><input type="text" name="number"></td>
                    </tr>
                    <tr>
                        <td class="left">Choose your tip percentage&nbsp;</td>
                        <td class="selector"><select type="select" name="percent" style="text-align:center">
                                <option value="0.20">20%</option>
                                <option value="0.18">18%</option>
                                <option value="0.15">15%</option>
                                <option value="0.10">10%</option>
                                <option value="0">No tip</option>
                            </select></td>
                    </tr>
                    <tr><td></td><td><input type="submit" value ="SUBMIT"></td></tr>
                </table>
            </form>
    </div>
    </body>
</html>
