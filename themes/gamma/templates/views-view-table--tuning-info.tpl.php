<!--!!!xx - gamma views-view-table--tuning-info.tpl.php-->
<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
 
/*echo "field_classes : <br><pre>".print_r($field_classes)."</pre><br><br>";
 
echo "row : <br><pre>".print_r($row)."</pre><br><br>";
*/
$found=false;
$rowcount=count($rows);
//echo "rowcount = " . $rowcount . "<br>";
error_reporting(E_ALL);
$var="";
if(@$_GET['pagetitle']){$var=strtolower($_GET['pagetitle']);}
#echo "var = " . $var . "<br>";

for($x=0; $x<$rowcount; $x++){
	
	$stripped_title=strtolower(strip_tags($rows[$x]['title']));#LEAVES A LINE BREAK!!!
	#$stripped_title = preg_replace("# <(?![/a-z]) | (?<=\s)>(?![a-z]) #exi", "htmlentities('$0')", $stripped_title);
	
	/*$stripped_title=preg_replace("#\s{2,}|&nbsp;#", "", $stripped_title);
	$stripped_title=str_replace("&nbsp;", "", $stripped_title);
	$stripped_title = preg_replace('#\s{2,}#', '', $stripped_title);*/
	
	
	#echo "stt - " . $stripped_title . "<br>";	
	#echo "var - " . $var . "<br>";
	
	if($var==$stripped_title){
		$found=true;
		$chosen_index=$x;
		#echo "gotcha - chosen_index - " . $chosen_index . "<br>";
	}
	
	$testArr[$x]['var']=$var;
	$testArr[$x]['title']=$stripped_title;
	
	#echo  "<br>";

}

/*print "<pre>";
print_r($testArr);
print "</pre>";*/

if($found):
#echo "chosen_index - $chosen_index<br>";
?>
    
<div class="tuning-info-right">
    <div class="tuning-info-thumb"><?php echo $rows[$chosen_index]['field_image1'];?></div>
    <div class="tuning-info-thumb"><?php echo $rows[$chosen_index]['field_image2'];?></div>
    <div class="tuning-info-thumb"><?php echo $rows[$chosen_index]['field_image3'];?></div>
</div>

<h1><?php echo strip_tags($rows[$chosen_index]['title']);?></h1>

<div class="tuning-info-text">
	<div style=" padding:5px;">        
		<?php echo $rows[$chosen_index]['body'];?>               
	</div>
</div>

<?php endif; ?>

<?php
if(!$found):?>

<div>Page not found</div>


<?php endif; ?>

<!--
<div style=" padding:5px;  width:95%; left:0px; top:0px; border:red 0px solid; color:#000000; background-color:#ffffff">
    

title : <?php //print $title;?><br>
header : <pre><?php //print_r($header);?></pre><br>
header_classes : <pre><?php //print_r($header_classes)?></pre><br>
fields : <pre><?php //print_r($fields);?></pre><br>
<!--class : <?php //print $class;?><br>
row_classes : <pre><?php //print_r($row_classes);?></pre><br>
rows : <pre><?php //print_r($rows);?></pre><br>
field_classes : <pre><?php //print_r($field_classes);?></pre><br> 

               
	</div>
    
 -->