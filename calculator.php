<!--Creating a session variable and assigning it to txtTotal-->
<?php
session start();
stotalValue = ""
$ SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class="form">
        <form name="intCalc" method="post" type="eBus3.php" />
        <h1>Shop Calculator</h1>
        <hr />
           <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Beverage</b></td>
                </tr>
                <tr>
                    <td>CocaCola</td>
                    <td><input type="Radio" id="CocaCola" Name="rdoGroup" value="1"/></td>
                </tr>
            </table>
           </center>
        </br>
        <center>
            <table cellspacing="10" >
                <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
                </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td> 
                </tr>
                <tr>
                    <td>-Discount @30@</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+VAT @40@</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
                    </table>
                </center>
        <br />
        <center>
               <input type="button" name="btnCola" id="btnCola" oneclick="calSub()" value="Calculate Amount"/>
               <input type="button" name="btnClear" id="btnClear" oneclick="AmountClear()" value="Clear"/>
               <input type="Submit"name="btnProceed" id="btnProceed" oneclick="" value="Proceed"/>
        </center>       
    </form>   
    </div>
    <script type="text/javascript">
        function calcSub( 
</body>
    
    
    
    
</html>
    


