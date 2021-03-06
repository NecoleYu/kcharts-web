<?php 
	include_once('header.php');
?>
<?php 
$chartType = isset($_GET['type']) ? $_GET['type'] : "linechart";
?>
<link rel="stylesheet" href="css/lib.css"/>
<div class="kc-lib">
	<div class="inner clearfix">
		<div class="siderbar bd-outer">
			<ul class="siderbar-inner bd-inner">
				<li class="banner">图表库</li>
				<li class="<?php if($chartType == "linechart"){ echo "cur";} ?>"><a class="sider-menu linechart" href="./lib.php?type=linechart" chartType="linechart">折线图<i></i></a></li>
				<li class="<?php if($chartType == "barchart"){ echo "cur";} ?>"><a class="sider-menu barchart " href="./lib.php?type=barchart" chartType="barchart">柱状图<i></i></a></li>
				<li class="<?php if($chartType == "piechart"){ echo "cur";} ?>"><a class="sider-menu piechart " href="./lib.php?type=piechart" chartType="piechart">饼图<i></i></a></li>
				<li class="<?php if($chartType == "scatterchart"){ echo "cur";} ?>"><a class="sider-menu scatterchart" href="./lib.php?type=scatterchart" chartType="scatterchart">散点图<i></i></a></li>
				<li class="<?php if($chartType == "dashboard"){ echo "cur";} ?>"><a class="sider-menu dashboard" href="./lib.php?type=dashboard" chartType="dashboard">仪表盘<i></i></a></li>
				<li class="<?php if($chartType == "mapchart"){ echo "cur";} ?>"><a class="sider-menu mapchart" href="./lib.php?type=mapchart" chartType="mapchart">地图<i></i></a></li>
				<li class="<?php if($chartType == "sumdetailchart"){ echo "cur";} ?>"><a class="sider-menu sumdetailchart" href="./lib.php?type=sumdetailchart" chartType="sumdetailchart">棒棒糖图<i></i></a></li>
			</ul>
	    </div>
		<div class="sidercontent ">
			<div class="bd-outer">
				<div class="demo-container bd-inner">
					<a id="J_OpenNew" class="open-new" href="#" target="_blank">新窗口打开</a>
					<div id="J_switchable" class="scrollable">
					    <span id="scroller-prev" class="prev disable">&lsaquo; 上一页</span>
					    <span id="scroller-next" class="next">下一页 &rsaquo;</span>
					    <div class="scroller">
					        <div class="ks-switchable-content">
					        </div>
		    			</div>
					</div>
				</div>
			</div>
			<div class="btn-container">
				<a class="btn btn-blue" href="generator.php">生成demo及代码</a>
				<a class="btn btn-blue" target="_blank" style="margin-left:14px;" href="generator.php">edit in jsfiddle</a>
				<a class="btn" target="_blank" style="margin-left:14px;" href="http://gallery.kissyui.com/kcharts/1.1/guide/index.html?spm=0.0.0.0.WpVybg">查看文档</a>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="H_chartType" value="<?php echo $chartType;?>">


<script type="text/javascript">
(function(S){
	S.Config.debug = true;

	S.config({
		packages:[
			{
				name:"js",
				path:"./"
			}
		]
	});

	S.use("js/lib",function(S,Lib){

		Lib.init();

	});

})(KISSY);
</script>


<?php
	include_once('footer.php');
?>