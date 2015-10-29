<html>
	<head>
	<meta charset= "UTF-8">
	<meta name="viewport"
    content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/footable.js" type="text/javascript"></script>
	<link href="css/footable.core.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="css/footable.metro.css" rel="stylesheet" type="text/css" />
	<link href="css/footable-demos.css" rel="stylesheet" type="text/css" />
	
	<script src="js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
	<script src="js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="js/demos.js" type="text/javascript"></script>
	<!--for jquery UI-->
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	<!--<link href="css/footable.standalone.css" rel="stylesheet" type="text/css" />
	-->
	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
	
	</head>
<body>
<!--

-->

<?php
$stat0 = "<td data-value='0'><span class='status-metro status-disabled' title='Disabled'>非対応</span></td>";
$stat1 = "<td data-value='1'><span class='status-metro status-suspended' title='Suspended'>キツイ</span></td>";
$stat2 = "<td data-value='2'><span class='status-metro status-caution' title='Caution'>大きすぎ</span></td>";
$stat3 = "<td data-value='3'><span class='status-metro status-active' title='Active'>対応</span></td>";

function switchStatus($status) {
  switch($status){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
}

?>

<?php

	$json_file1 = file_get_contents('data/docomo.json');
	// convert the string to a json object
	$jfo = json_decode($json_file1);
	//var_dump($jfo);
	$json_file2 = file_get_contents('data/Softbank.json');
	$jfsb = json_decode($json_file2);
	
	$json_file3 = file_get_contents('data/AU.json');
	$jfau = json_decode($json_file3);
	
	$json_file4 = file_get_contents('data/iPhone.json');
	$jfip = json_decode($json_file4);
	
?>
<div class="demo-container">
	<div class="alert">
		ポーチ用機種対応表
	</div>
	
<div id="tabs" width='100%'>
		<ul>
			<li><a href="#Docomo">Docomo</a></li>
			<li><a href="#Softbank">Softbank</a></li>
			<li><a href="#AU">AU</a></li>
			<li><a href="#iPhone">iPhone</a></li>
		</ul>


<div id='Docomo' width='100%'>
			<table class="metro-blue" data-page-size="12">
				<!--head定義-->
                <thead> 
                <tr>
                    <th>
                        型番
                    </th>
                    <th>
                        ARM-PKM
                    </th>
                    <th>
                        ARM-PKL
                    </th>
                    <th>
                        ARM-PCH
                    </th>
                    <th>
                        MUL-BACK
                    </th>
                </tr>
                </thead>
<tbody>
<?php
	//$index = 0;
	foreach ($jfo as $item){
	//$index = $index+1;
	echo "<tr>";
	echo "<td>";
	echo $item->model;
	echo "</td>";
	//switchStatus($item->ARMPKM);
	switch($item->ARMPKM){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	
	//switchStatus($item->ARMPKL);
	switch($item->ARMPKL){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	//switchStatus($item->ARMPCH);
	
	switch($item->ARMPCH){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
  
  
	//switchStatus($item->MULBACK);
	switch($item->MULBACK){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	echo "</tr>";
	}
?>
</tbody><tfoot><tr><td colspan='5'><div class='pagination pagination-centered'></div></td></tr></tfoot></table>

</div>

<div id='Softbank'>
	<table class="metro-blue" data-page-size="12">
				<!--head定義-->
                <thead> 
                <tr>
                    <th>
                        型番
                    </th>
                    <th>
                        ARM-PKM
                    </th>
                    <th>
                        ARM-PKL
                    </th>
                    <th>
                        ARM-PCH
                    </th>
                    <th>
                        MUL-BACK
                    </th>
                </tr>
                </thead>
<tbody>
<?php
	//$index = 0;
	foreach ($jfsb as $item){
	//$index = $index+1;
	echo "<tr>";
	echo "<td>";
	echo $item->model;
	echo "</td>";
	//switchStatus($item->ARMPKM);
	switch($item->ARMPKM){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	
	//switchStatus($item->ARMPKL);
	switch($item->ARMPKL){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	//switchStatus($item->ARMPCH);
	
	switch($item->ARMPCH){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
  
  
	//switchStatus($item->MULBACK);
	switch($item->MULBACK){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	echo "</tr>";
	}
?>
</tbody><tfoot><tr><td colspan='5'><div class='pagination pagination-centered'></div></td></tr></tfoot></table>

</div>

<div id='AU'>
	<table class="metro-blue" data-page-size="12">
				<!--head定義-->
                <thead> 
                <tr>
                    <th>
                        型番
                    </th>
                    <th>
                        ARM-PKM
                    </th>
                    <th>
                        ARM-PKL
                    </th>
                    <th>
                        ARM-PCH
                    </th>
                    <th>
                        MUL-BACK
                    </th>
                </tr>
                </thead>
<tbody>
<?php
	//$index = 0;
	foreach ($jfau as $item){
	//$index = $index+1;
	echo "<tr>";
	echo "<td>";
	echo $item->model;
	echo "</td>";
	//switchStatus($item->ARMPKM);
	switch($item->ARMPKM){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	
	//switchStatus($item->ARMPKL);
	switch($item->ARMPKL){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	//switchStatus($item->ARMPCH);
	
	switch($item->ARMPCH){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
  
  
	//switchStatus($item->MULBACK);
	switch($item->MULBACK){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	echo "</tr>";
	}
?>
</tbody><tfoot><tr><td colspan='5'><div class='pagination pagination-centered'></div></td></tr></tfoot></table>
</div>

<div id = 'iPhone'>
	<table class="metro-blue" data-page-size="12">
				<!--head定義-->
                <thead> 
                <tr>
                    <th>
                        型番
                    </th>
                    <th>
                        ARM-PKM
                    </th>
                    <th>
                        ARM-PKL
                    </th>
                    <th>
                        ARM-PCH
                    </th>
                    <th>
                        MUL-BACK
                    </th>
                </tr>
                </thead>
<tbody>
<?php
	//$index = 0;
	foreach ($jfip as $item){
	//$index = $index+1;
	echo "<tr>";
	echo "<td>";
	echo $item->model;
	echo "</td>";
	//switchStatus($item->ARMPKM);
	switch($item->ARMPKM){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	
	//switchStatus($item->ARMPKL);
	switch($item->ARMPKL){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	//switchStatus($item->ARMPCH);
	
	switch($item->ARMPCH){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
  
  
	//switchStatus($item->MULBACK);
	switch($item->MULBACK){
    case "0":
	echo $stat0;
	break;
	case "1":
	echo $stat1;
	break;
	case "2":
	echo $stat2;
	break;
	case "3":
	echo $stat3;
	break;
	default: echo $stat3;
  }
	echo "</tr>";
	}
?>
</tbody><tfoot><tr><td colspan='5'><div class='pagination pagination-centered'></div></td></tr></tfoot></table>
</div>



    <script type="text/javascript">
	$(function () {
		$('table').footable();
		//$('table').addClass($(this).data('class'));
	});
	</script>

</body>
