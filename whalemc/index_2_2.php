<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="css/commonAnimations.css" />
	<link rel="stylesheet" type="text/css" href="css/cake.css" />
	<title>黑暗指数★★</title>
</head>
<body style="overflow: hidden">
	<!-- 预加载 -->
	<div id="loading" style="background-color:#f7f5ea;font-size: 20px;color: #4c78a7;font-family: '黑体'; ">
			<div style="width: 128px;height: 128px;left: 50%;margin-left: -64px;top: 50%;position: absolute;margin-top: -94px;">
				<div id="loadingCover2" style="width: 128px;height: 128px;background-image:url('img/loading_img.png');background-size:128px 128px;position: absolute;top:0;left:0;z-index: 8;"></div>
				<div style="width: 128px;height: 128px;background-image:url('img/loading_cover.png');background-size:128px 128px;position: absolute;top:0;left:0;"></div>
			</div>
			<div id="percentWrap" >
				0%
			</div>
		</div>
	<!-- 预加载  end -->
	<!-- 手机竖屏提醒 -->
	<div id="orientLayer" class="mod-orient-layer">
		<div class="mod-orient-layer__content"> <i class="icon-wx mod-orient-layer__icon-orient"></i>
			<div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
		</div>
	</div>
	<!-- 手机竖屏提醒  end-->
	<!-- 背景音乐 -->
	<div class="music-on" style="display: none;"></div>
	<div class="music-off" style="display: none;"></div>
	<!-- 背景音乐  end-->
	<!-- 页面内容-->
	<div id="pageWrap">
		<div class="page page-1-1 page-current">
		<img class="background1 bg" src="img/bg1.jpg" />
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img1-1 imgcomm" id="img1-1" ></div>
				<div class="pt-page-scaleUpIcon img1-2 imgcomm"></div>
				<div class="pt-page-scaleUpIcon img1-3 imgcomm"></div>
				<div class="pt-page-scaleUpIcon img1-4 imgcomm"></div>
				<div class="pt-page-scaleUpIcon img1-5 imgcomm"></div>
			</div>
			
		</div>
		<div class="page page-2-1 hide" audioId = "1">
		<img class="background1 bg" src="img/bg2.jpg" />
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img2-1 imgcomm imgclick"></div>
				<div class="pt-page-scaleUpIcon img2-2 imgcomm"></div>
				<div class="pt-page-scaleUpIcon img2-3 imgcomm"></div>
			</div>
			
		</div>
		<div class="page page-3-1 hide" audioId = "2">
		<img class="background1 bg" src="img/bg2.jpg" />
			<div class="zoom-page">
				<div class="case1">
					<div class="pt-page-scaleUpIcon img3-1-1 imgcomm "></div>
					<div class="opacityOnIcon img3-5 imgcomm " style="width: 337px;background-position-y: -1274px;"></div>
					<div class="arrow pt-page-moveIconUp img-arrow img3-3"></div>
				</div>
			</div>
		</div>
		<div class="page page-4-1 hide" audioId = "3">
		<img class="background1 bg" src="img/bg2.jpg" />
			<div class="zoom-page">
				<div class="moonmove img4-01 imgcomm "></div>
				<div class="img4-02 imgcomm "></div>
				<div class="pt-page-Up img4-03 imgcomm "></div>
				<div class="pt-page-scaleUpIcon img4-04 imgcomm " style="background-position-y: -372px;"></div>
				<div class="arrow pt-page-moveIconUp img-arrow img4-05"></div>
				<div class="pt-page-scaleUpIcon img4-06 imgcomm"></div>
				<img src="img/bs.gif" class="moon_jj" style="left:-98px;"/>
			</div>
		</div>
		<div class="page page-5-1 hide" audioId = "5">
		<img class="background1 bg" src="img/bg3.jpg" />
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">			
				<div class="pt-page-scaleUpIcon img6-01 imgcomm "></div>
				<div class="pt-page-scaleUpIcon img6-02 imgcomm "></div>
				<img class="pt-page-scaleUpIcon img6-03 imgcomm " src="img/2.png" />
				<div class="pt-page-scaleUpIcon img6-04 imgcomm "></div>
			</div>			
		</div>
		<audio id="audio1" src="" style="display:none;"></audio>
		<audio id="audio2" src="img/no.mp3" style="display:none;"></audio>
	</div>
	<!-- 页面内容  end-->
	<!-- 统计访问量-->
	<div style="display:none">
		<script src="http://s4.cnzz.com/z_stat.php?id=1256430511&web_id=1256430511" language="JavaScript"></script>
	</div>
	<script>
			var _czc = _czc || [];
			_czc.push(["_setAccount", "1256430511"]);
	</script>
	<!-- 统计访问量 end-->
			
</body>
	<script src="js/zepto.min.js"></script>
	<script src="js/hammer.min.js"></script>
	<script src="js/pxloader-all.min.js"></script>
	<script src="js/init.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<?php
	require_once "jssdk.php";
	$jssdk = new JSSDK("wxcaf39b453c29c206", "8b21db2889cc803ad8ef09e09176b599");
	$signPackage = $jssdk->GetSignPackage();
	?>	
	<script>
		wx.config({
			debug: false,
			appId: '<?php echo $signPackage["appId"];?>',
			timestamp: <?php echo $signPackage["timestamp"];?>,
			nonceStr: '<?php echo $signPackage["nonceStr"];?>',
			signature: '<?php echo $signPackage["signature"];?>',
			jsApiList: [
			"onMenuShareTimeline",
			"onMenuShareAppMessage"
			]
		});
		wx.ready(function() {
			wx.hideOptionMenu();
		});		
	</script>
    <script>
		var basePath = "img/";
		var audio = document.getElementById("audio");
		$(document).ready(function() {	
			var loader = new PxLoader();
			var fileList = [
				"arrow.png",
						"arrow.png",
						"bg1.jpg",
						"bg2.jpg",
						"bg3.jpg",
						"cont2.png",
						"cont3.png",
						"cont4.png",
						"loading_cover.png",
						"loading_img.png",
						"no.mp3",
						"bs.gif"
				];			
			for (var i = 0; i < fileList.length; i++) {
				var pxImage = basePath + fileList[i];
				pxImage.imageNumber = i + 1;
				loader.addImage(pxImage);
			}
			loader.addCompletionListener(function() {
				$("#loading").remove();
				$("#pageWrap").css("display", "block");
				$(".music-on").show();
				
			});
			loader.addProgressListener(function(e) {
				var percent = Math.round((e.completedCount / e.totalCount) * 100);
				$("#percentWrap").html(percent + "%");
				$("#loadingCover2").css("height",(128-128*(e.completedCount/e.totalCount))+"px");
			});
			loader.start();
		});
	</script>
</html>
