<style>
table {
	margin-top: 15pt;
	overflow: visible;
	empty-cells: hide;
	border:1px solid #000000;
	font-family: sans-serif;
	font-size: 10pt;
	background-gradient: linear #c7cdde #f0f2ff 0 1 0 0.5;
}
td, th {
	border:1px solid #000000;
	text-align: left;
	font-weight: normal;
}
td.markedcell {
	text-decoration: line-through;
	color: #CC0000;
}
td.underlinedcell {
	text-decoration: underline;
	color: #CC0000;
}
td.rotatedcell {
	text-decoration: line-through;
	color: #CC0000;
	text-rotate: 45;
}
td.cost { text-align: right; }
caption.tablecaption {
	font-family: sans-serif;
	font-weight: bold;
	border: none;
	caption-side: top;
	margin-bottom: 0;
	text-align: center;
}
u.doubleu {
	text-decoration: none;
	border-bottom: 3px double #000088;
}
a.reddashed {
	text-decoration: none;
	border: 1px dashed #880000;
}
table.zebra tbody tr:nth-child(2n+1) td { background-color: rgba(255,255,127,0.6); }
table.zebra tbody tr:nth-child(2n+1) th { background-color: rgba(255,255,127,0.6); }
table.zebra thead tr { background-color: #FFBBFF; }
table.zebra tfoot tr { background-color: #BBFFFF; }
</style>
<?php
 $_REQUEST['receipt']= "RECEIPT";
$_REQUEST['orgname'] = "Super Mega Investments";
$_REQUEST['orgstreet']= "Faculty of Science";
$_REQUEST['billto']= "Bill to";
$_REQUEST['billname']= "Physics Dept.";
$_REQUEST['billstreet']= "Faculty of Science";
$_REQUEST['shipstreet']= "12 Adeola Odeku";
$_REQUEST['shipname']= "Ademola Adewale";
$_REQUEST['shiptown']= "Victoria Island";
$_REQUEST['shipcity']= "Lagos";
$_REQUEST['dateissued']= "Date Issued";
$_REQUEST['recnumber']= "12345678";
$_REQUEST['date']= "22/12/2023";
$_REQUEST['note']= "Thanks for your patronage";
$_REQUEST['quantity']= "Quantity";
$_REQUEST['description']= "Description";
$_REQUEST['unitprice']= "Unit Price";
$_REQUEST['amount']= "Amount";
$_REQUEST['currency']= "$";
$_REQUEST['discount']= 1;
$_REQUEST['tax']= 1;
$_REQUEST['taxhead']= "Tax";
$_REQUEST['taxvale']= 50;
$_REQUEST['discounthead']= "Discount";
$_REQUEST['discount']= 1;
$_REQUEST['discountvale']= 50;
$_REQUEST['totalhead']= "Total";
$_REQUEST['totalvale']= 5000;
$_REQUEST['qty1']= 2;
$_REQUEST['item1']= "Jollof Rice";
$_REQUEST['uprice1']= 2500;
$_REQUEST['amount1']= 5000;
$_REQUEST['name']= "Haliru Yusuf";
$_REQUEST['email']= "sales@smi.com";
$_REQUEST['role']= "Sales Agent";
$_REQUEST['phone']= "08068858953";


?>
<div style="background:orange;height:20pt; width:100%;"> </div>
<div style="float: right; text-align:right; width: 50%; margin-bottom: 0pt; ">
<h1> <?php echo $_REQUEST['receipt']; ?> </h1>
</div>
<div style="float: left; width: 50%; margin-bottom: 0pt; "> 

<h1> <?php echo $_REQUEST['orgname']; ?> </h1> <?php echo nl2br ($_REQUEST['orgstreet']);?></div>

<div style="clear:both; margin-top: 10pt; float: left; width: 25%; margin-bottom: 0pt; ">
    <b> <?php echo $_REQUEST['billto']; ?>: </b> <br/><?php echo $_REQUEST['billname']; ?> <br/> <?php echo nl2br ($_REQUEST['billstreet']); ?> </div>
<div style="float: left; width: 25%; margin-bottom: 0pt; ">
    <?php if ($_REQUEST['shipstreet']!="") { echo "<b> Ship to: </b>"; } ?> <br/> <?php echo $_REQUEST['shipname']; ?> <br/> <?php echo $_REQUEST['shipstreet']; ?> <br/><?php echo $_REQUEST['shiptown']; ?><br/><?php echo $_REQUEST['shipcity'];?><br/>

</div>

<div style=" float: right; width: 25%; margin-bottom: 0pt; ">
<div style=" float: left; width: 50%; margin-bottom: 0pt; ">
<b> <?php //echo $_REQUEST['receiptno']; ?># : </b> <br/> <b><?php echo $_REQUEST['dateissued']; ?>:</b> <br/> 
</div>
<div style=" float: right; width: 50%; margin-bottom: 0pt; text-align:right; ">
<?php echo $_REQUEST['recnumber']; ?><br/><?php echo $_REQUEST['date']; ?> <br/> 
</div>
</div>
<div style="clear:both; margin-bottom:10pt; background:orange;height:20pt; width:100%;"> </div>

<table class="zebra" align="center">
<caption class="tablecaption" align="bottom"><?php echo nl2br($_REQUEST['note']); ?></caption>
<thead>
  <tr>
    <th width="51" height="32"><?php echo $_REQUEST['quantity']; ?></th>
    <td width="290"><?php echo $_REQUEST['description']; ?></td>
    <td width="103"><?php echo $_REQUEST['unitprice']; ?></td>
    <td width="118"><?php echo $_REQUEST['amount']; ?>(<?php echo $_REQUEST['currency']; ?>)</td>
  </tr>
</thead>
<tfoot>
<?php
if ($_REQUEST['discount']!=0){
 echo '<tr>
    <th height="28"></th>
    <td></td>
    <td>'.$_REQUEST['discounthead'].'('.$_REQUEST['discount'].'%)</td>
    <td class="cost"><b> '.$_REQUEST['currency']. $_REQUEST['discountvale'].'</b></td>
  </tr>';
}
  if ($_REQUEST['tax']!=0){
 echo '<tr>
    <th height="28"></th>
    <td></td>
    <td>'.$_REQUEST['taxhead'].' ('.$_REQUEST['tax'].'%)</td>
    <td class="cost"><b>' .$_REQUEST['currency']. $_REQUEST['taxvale'].'</b></td>
  </tr>';
}
if ($_REQUEST['discount']!=0|$_REQUEST['tax']!=0){
 echo '<tr>
    <th height="28"></th>
    <td></td>
    <td>'.$_REQUEST['totalhead'].'</td>
    <td class="cost"><b>'. $_REQUEST['currency']. $_REQUEST['totalvale'].'</b></td>
  </tr>';
}else{
echo '<tr>
    <th height="28"></th>
    <td></td>
    <td>'. $_REQUEST['totalhead'].'</td>
    <td class="cost"><b>'. $_REQUEST['currency'].$_REQUEST['totalvale']. '</b></td>
  </tr>';}
   ?>
</tfoot>
<tbody>
 <?php
 $i =1;
while( isset ($_REQUEST['item'.$i])){
$row = '<tr>
    <td height="28"><p>'. $_REQUEST['qty'.$i].'</p></td>
    <td>'. $_REQUEST['item'.$i].'</td>
    <td>'. $_REQUEST['uprice'.$i].'</td>
    <td class="cost"><p>'. $_REQUEST['amount'.$i].'</p></td></tr>';
$i++;
echo $row;
}
 ?>
 </tbody>
</table>
<br />

<div style="float: left; width: 50%; margin-bottom: 0pt; margin-top: 80pt; ">
<?php echo $_REQUEST['name']; ?> <br/> <?php echo $_REQUEST['email']; ?><br/>
<?php echo $_REQUEST['role']; ?> <br/> <?php echo $_REQUEST['phone']; ?> <br/>
<b><?php echo $_REQUEST['orgname']; ?> </b> <br/> 
</div>
<div style="position:fixed; bottom:0; background:orange;height:30pt; width:100%;">
</div>
