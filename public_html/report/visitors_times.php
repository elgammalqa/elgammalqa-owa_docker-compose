<?php
/*!
* ATTENTION: THIS FREE LICENSE IS ONLY FOR PERSONAL NON-COMMERCIAL USER. FOR COMMERCIAL PURPOSES, PLEASE PURCHASE A COMMERCIAL LICENSE! * 
* module: Centcount Analytics Free Visitors Times PHP Code *
* version: 1.00 Free *
* author: WM Jonssen *
* date: 03/12/2018 *
* copyright 2015-2018 WM Jonssen <wm.jonssen@gmail.com> - All rights reserved.*
* license: Dual licensed under the Free License and Commercial License. *
* https://www.centcount.com *
*/


function visitors_times_html() {
	
	$timezone = get_site_info('TimeZone');
	
	//$GLOBALS['TEXT_SUBMENU'] = SUBMENU_VISITORS;
			
	$GLOBALS['TEXT_BODY'] = '
	<div id="frametable" class="frametable">
		<div class="frameinner">
			<div class="innertable">
				<div class="innertitle">
					<span>'. $GLOBALS['indicator']['Local Time'] .'</span>
					<a id="LocalTimeTB_R" href="" class="ca_refresh_btn" alt="refresh" title="refresh"></a>
				</div>
				<div id="LocalTimeTB" class="innerbody">
				
				</div>
				<div class="innerfoot">
					<a id="LocalTimeTB_TB"  href="" class="ca_table_btn" alt="table" title="table"></a>
					<a id="LocalTimeTB_ALL" href="" class="ca_all_btn" alt="show all data" title="show all data"></a>
					<a id="LocalTimeTB_PIE" href="" class="ca_pie_btn" alt="pie" title="pie"></a>
					<a id="LocalTimeTB_BAR" href="" class="ca_bar_btn" alt="bar" title="bar"></a>
				</div>
			</div>
		</div>
		<div class="frameinner">
			<div class="innertable">
				<div class="innertitle">
					<span>'. $GLOBALS['indicator']['Server Time'] .'</span>
					<a id="ServerTimeTB_R" href="" class="ca_refresh_btn" alt="refresh" title="refresh"></a>
				</div>
				<div id="ServerTimeTB" class="innerbody">
				
				</div>
				<div class="innerfoot">
					<a id="ServerTimeTB_TB"  href="" class="ca_table_btn" alt="table" title="table"></a>
					<a id="ServerTimeTB_ALL" href="" class="ca_all_btn" alt="show all data" title="show all data"></a>
					<a id="ServerTimeTB_PIE" href="" class="ca_pie_btn" alt="pie" title="pie"></a>
					<a id="ServerTimeTB_BAR" href="" class="ca_bar_btn" alt="bar" title="bar"></a>
				</div>
			</div>
		</div>
	</div>';

	$GLOBALS['TEXT_CSS'] = '
<style type="text/css">
	
.selectframe{font-size:14px; font-family:"Microsoft Yahei",Arial,Verdana; width:100%; min-width:360px; height:auto; float:left; border-bottom:#ccc 1px solid; margin:auto; text-align:center;}	

.framebody{width:auto; min-width:345px; height:auto; float:none; margin:0px; margin-left:15px; text-align:left; overflow-x:auto; overflow-y:hidden;}
.errmsg{margin-bottom:10px;}
.frametable{width:100%; height:auto; text-align:center; float:none;}
.frameinner{width:50%; height:auto; text-align:center; float:left;}

.innertable{width:100%; min-width:330px; height:auto; margin:0px; text-align:left; float:none;}
.innertitle{width:auto; height:45px; line-height:45px; padding-left:10px; margin-right:15px; text-align:left; font-size:20px; color:#111; font-family:Verdana,"Microsoft Yahei",Arial; border:1px #ccc solid; border-bottom:0px; float:none;}
.innerbody{width:auto; height:auto; margin-right:15px; text-align:left; border:0px; float:none; scrolling:no;}
.innerfoot{width:auto; height:45px; margin-right:15px; margin-bottom:15px; text-align:left; font-size:16px; font-weight:bold; border:1px #ccc solid; border-top:0px; float:none;}

@media only screen and (max-width: 2400px) {
.frameinner{width:100%; height:auto;}
}

</style>

<link href="css/ichart.css" rel="stylesheet" type="text/css" />
';
	
	$GLOBALS['TEXT_SCRIPT'] = '
<script src="js/chart.min.js"></script>
<script src="js/ichart.js"></script>

<script type="text/javascript">

	var LocalTimeTB, ServerTimeTB;

	Refresh();
	function Refresh() {
		LocalTimeTB = new CHARTAPI('.$GLOBALS['SITEID'].', '.$_SESSION['r'].', VisitorsAPI.from, VisitorsAPI.to, 0, 22, "'.$timezone.'", 24, 0, 1, "'.$_SESSION['DATACENTER'].'", "LocalTimeTB", 1, 0, 0, "'.$_SESSION['lan'].'", LAN);
		ServerTimeTB = new CHARTAPI('.$GLOBALS['SITEID'].', '.$_SESSION['r'].', VisitorsAPI.from, VisitorsAPI.to, 0, 21, "'.$timezone.'", 25, 0, 1, "'.$_SESSION['DATACENTER'].'", "ServerTimeTB", 1, 0, 0, "'.$_SESSION['lan'].'", LAN);

		LocalTimeTB.run(0);
		ServerTimeTB.run(0);
	}
	
	function Resize() {
		setTimeout(function(){
			LocalTimeTB.resize();
			ServerTimeTB.resize();
		}, 500);
	}

</script>';
		
}

?>