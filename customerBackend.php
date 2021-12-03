<?php
$password = $_POST["psw"];
echo "<p>Hello there!  Welcome to Nifemi's superstore you have successfully created your account</p>";
echo "Your password is: " . $password . "<br>";
echo "The outline of your order is shown below, thanks for shopping with us!";
$q1 = $_POST["quantity1"];
$q2 = $_POST["quantity2"];
$q3 = $_POST["quantity3"];
$q4 = $_POST["quantity4"];
$q5 = $_POST["quantity5"];
$q6 = $_POST["quantity6"];
$p1 = $_POST["price1"];
$p2 = $_POST["price2"];
$p3 = $_POST["price3"];
$p4 = $_POST["price4"];
$p5 = $_POST["price5"];
$p6 = $_POST["price6"];
$shipOption = $_POST["shipping"];
if ($shipOption == "FREE")
{
    $shipPrice = 0;
}
else if ($shipOption == "OVERNIGHT")
{
    $shipPrice = 50;
    $shipOption = "OVERNIGHT EXPRESS";
}
else if ($shipOption == "THREE")
{
    $shipPrice = 5;
    $shipOption = "THREE DAY";

}
$c1 = $q1 * $p1;
$c2 = $q2 * $p2;
$c3 = $q3 * $p3;
$c4 = $q4 * $p4;
$c5 = $q5 * $p5;
$c6 = $q6 * $p6;

echo "<table border = '1' class = 'receipt' >";
echo "<tr>";
echo "<th> </th>";
echo "<th> Quantity </th> ";
echo "<th> Cost Per Item </th> ";
echo "<th> Sub Total </th> ";
echo "</tr>";
echo "<tr>";
echo "<th> Item 1 </th>";
if ($q1 >0 && $q1 <5)
 {
 echo "<td> $q1 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p1.00 </td>";
echo "<td> $$c1 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Item 2 </th>";
if ($q2 >0 && $q2 <5)
 {
 echo "<td> $q2 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p2.00 </td>";
echo "<td> $$c2 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Item 3 </th>";
if ($q3 >0 && $q3 <5)
 {
 echo "<td> $q3 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p3.00 </td>";
echo "<td> $$c3 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Item 4 </th>";
if ($q4 >0 && $q4 <5)
 {
 echo "<td> $q4 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p4.00 </td>";
echo "<td> $$c4 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Item 5 </th>";
if ($q5 >0 && $q5 <5)
 {
 echo "<td> $q5 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p5.00 </td>";
echo "<td> $$c5 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Item 6 </th>";
if ($q6 >0 && $q6 <5)
 {
 echo "<td> $q6 </td>";
 }
 else
 {
 echo "<td> 0 </td>";
 }
echo "<td> $$p6.00 </td>";
echo "<td> $$c6 </td>";
echo "</tr>";
echo "<tr>";
echo "<th> Shipping </th>";
echo "<td colspan = '2' > $shipOption </td>";
echo "<td> $$shipPrice </td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan = '3' > Total Cost </th>";
$total =$c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $shipPrice ;
echo "<th> $$total </th>";
echo "</tr>";
echo "</table>";
?>
