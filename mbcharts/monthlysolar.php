<?php
	
	####################################################################################################
	#	WUDATACHARTS by BRIAN UNDERDOWN 2016                                                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('../settings.php');header('Content-type: text/html; charset=utf-8');
	$weatherfile = date('M');
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR Solar Radiation Monthly CHART</title>	
		<script src=../js/jquery.js></script>
		
	';	
	?>
    <br>
    <script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "<?php echo date('Y');?>/<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 1; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�/g,'').split(',');
				if ( rowData.length >1)
					dataPoints1.push({label:rowData[0],y:parseFloat(rowData[8])});	
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>1){
			
			for (var i = 100; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�/g,'').split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[3]*1.60934)});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "#fff",
		  animationEnabled: false,
		 
		title: {
            text: "",
			fontSize: 12,
			fontColor:' #555',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "#fff",
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label}",
			   shared: true, 
 },
		axisX: {
			gridColor: "#aaa",
		    labelFontSize: 10,
			labelFontColor:' #555',
			lineThickness: 1,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:-0.2,
			interval:1,	
			gridDashType: "dot",	
			 xValueType: "dateTime",	
			},
			
		axisY:{
		title: "Solar Radiation (<?php echo 'wm/2' ;?>) Recorded",
		titleFontColor: "#555",
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		lineThickness: 1,		
		gridThickness: 1,		
        includeZero: true,
		gridColor: "#aaa",
		gridDashType: "dot",
		labelFontSize: 11,
		labelFontColor:' #555',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + " <?php echo 'wm/2' ;?> " ;  
         },		
			 
		 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//Solar Radiation
			type: "column",
			color:"#FF8841",
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "none",
			name:"Max Solar Radiation",
			dataPoints: dataPoints1,
			yValueFormatString:"#0.# <?php echo 'wm/2' ;?>",
		},
		{
			
		}

		]
		});

		chart.render();
	}
});

    </script>
   <link rel="stylesheet" href="weather34chartstyle.css?ver=9.0">
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation;?> Solar Radiation (<?php echo 'wm/2' ;?>) <?php echo date('F Y') ;?>"></div>
<div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
<div id="chartContainer" class="chartContainer"><span style="position:absolute;font-size:34px;text-align:center;line-height:100px;margin-left:100px;font-family:arial;"> Solar Chart Data N/A<br></span></div></div>
<div class="weather34browser-footer">
<span style="position:absolute;color:#fff;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com" target="_blank"> 
<span style="color:#00A4B4;"><?php echo $chartversionmysql  ;?> CSS & PHP scripts by weather34</span> </a></span>
<span style="position:absolute;color:#aaa;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a></span>
<div class="weather34browser-footerlogo"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div>
</body>
<script src='canvasJs.js'></script>
</html>