<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="css/commonAnimations.css" />
	<link rel="stylesheet" type="text/css" href="css/cake.css" />
	<title></title>
</head>
<body style="overflow: hidden">
	<!-- 预加载 -->
	<div id="loading" style="background-color:#f7f5ea;font-size: 20px;color: #4c78a7;font-family: '黑体'; ">
		<div style="width: 128px;height: 128px;left: 50%;margin-left: -64px;top: 50%;position: absolute;margin-top: -94px;">
			<div id="loadingCover2" style="width: 128px;height: 0px;background-image:url('img/loading_img.png');background-size:128px 128px;position: absolute;top:0;left:0;z-index: 8;"></div>
			<div style="width: 128px;height: 128px;background-image:url('img/loading_cover.png');background-size:128px 128px;position: absolute;top:0;left:0;"></div>
		</div>
		<div id="percentWrap" >0%</div>
	</div>
	<!-- 预加载  end -->
	<!-- 手机竖屏提醒 -->
	<div id="orientLayer" class="mod-orient-layer">
		<div class="mod-orient-layer__content"> <i class="icon-wx mod-orient-layer__icon-orient"></i>
			<div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
		</div>
	</div>
	<!-- 手机竖屏提醒  end-->
	<!-- 页面内容-->
	<div id="pageWrap">
		<div class="page page-1-1 page-current page-click">
		<img src="img/a1-00.png" style="width:100%;position:absolute;bottom:-1px;left:0px;">
			<div class="zoom-page">			
				<div class=" img1-1 imgcomm" id="img" ></div>
				<div class=" img1-2 imgcomm"></div>
				<div class=" img1-3 imgcomm"></div>
				<div class="pt-page-heartbeat  img1-4 imgcomm imgclick" ></div>
				<div class=" img1-5 imgcomm"></div>
			</div>
		</div>
		<div class="page page-2-1 hide page-click">
		<img src="img/a3-00.png" style="width:100%;position:absolute;bottom:-1px;left:0px;">
			<div class="zoom-page">
				
				<div class="img3-1 imgcomm "></div>
				<div class="img3-46 imgcomm"></div>
				<!--加祝福材料 -->
				<div class="addScore">
					<div class="img3-2 imgcomm unselect" ></div>
					<div class="img3-3 imgcomm selected hide"></div>
				</div>
				<div class="addScore">
					<div class="img3-4 imgcomm unselect" ></div>
					<div class="img3-5 imgcomm selected hide"></div>
				</div>
				<div class="addScore">
					<div class="img3-6 imgcomm unselect" ></div>
					<div class="img3-8 imgcomm selected hide"></div>
				</div>
				<div class="addScore">
					<div class="img3-9 imgcomm unselect" ></div>
					<div class="img3-10 imgcomm selected hide"></div>
				</div>
				<div class="addScore">
					<div class="img3-11 imgcomm unselect" ></div>
					<div class="img3-12 imgcomm selected hide"></div>
				</div>
				<!--减黑暗材料 -->
				<div class="subScore">
					<div class="img3-13 imgcomm  unselect"></div>
					<div class="img3-14 imgcomm hide selected"></div>
				</div>
				<div class="subScore">
					<div class="img3-15 imgcomm  unselect"></div>
					<div class="img3-16 imgcomm  hide selected"></div>
				</div>
				<div class="subScore">
					<div class="img3-17 imgcomm  unselect"></div>
					<div class="img3-18 imgcomm hide selected"></div>
				</div>
				<div class="subScore">
					<div class="img3-19 imgcomm  unselect"></div>
					<div class="img3-20 imgcomm hide selected"></div>
				</div>
				<div class="subScore">
					<div class="img3-21 imgcomm  unselect"></div>
					<div class="img3-22 imgcomm hide selected"></div>
				</div>
				<!-- 材料下面图标 -->
				<div class="img3-23 imgcomm"></div>
				<div class="img3-24 imgcomm"></div>
				<div class="img3-25 imgcomm"></div>
				<div class="img3-26 imgcomm"></div>
				<div class="img3-27 imgcomm"></div>
				<!-- 开始制作 -->
				<div class="img3-28 imgcomm" id="startCooking"></div>
				<!-- 黑暗值 -->
				<div class="img3-29 imgcomm hide heian-title"></div>
				<div class="img3-30 imgcomm hide bloodnum"></div>
				<div class="img3-31 imgcomm hide bloodnum"></div>
				<div class="img3-32 imgcomm hide bloodnum"></div>
				<div class="img3-33 imgcomm hide bloodnum"></div>
				<div class="img3-34 imgcomm hide bloodnum"></div>
				<!--祝福值 -->
				<div class="img3-35 imgcomm hide zhufu-title"></div>
				<div class="img3-36 imgcomm hide bloodnum1"></div>
				<div class="img3-37 imgcomm hide bloodnum1"></div>
				<div class="img3-38 imgcomm hide bloodnum1"></div>
				<div class="img3-39 imgcomm hide bloodnum1"></div>
				<div class="img3-40 imgcomm hide bloodnum1"></div>
				<!-- 祝福血条 -->
				<div class="img3-41 imgcomm hide zhufu-blood"></div>
				<div class="img3-42 imgcomm hide zhufu-blood"></div>
				<div class="img3-43 imgcomm hide zhufu-blood"></div>
				<div class="img3-44 imgcomm hide zhufu-blood"></div>
				<div class="img3-45 imgcomm hide zhufu-blood"></div>
				<!-- 黑暗血条 -->
				<div class="img3-47 imgcomm hide heian-blood"></div>
				<div class="img3-48 imgcomm hide heian-blood"></div>
				<div class="img3-49 imgcomm hide heian-blood"></div>
				<div class="img3-50 imgcomm hide heian-blood"></div>
				<div class="img3-51 imgcomm hide heian-blood"></div>
			</div>
			<!-- 遮罩页 -->
			<div id="blackBlock" class="hide" style="width:100%;height:100%;top:0;z-index:999;background-color:#000;opacity:0.5;left:0;position:absolut;">
				<img  src="img/a2-01.png" style="width:100%;position: absolute;z-index: 2;margin-top: -80px;left:0;top:50%;"  />
			</div>
			<!-- gif页 -->
			<div id="blackBlock2" class="zoom-page hide" style="width: 450px; top: 8%; z-index: 1; left: 0px; position: absolute; transform: scale(0.592593, 0.592593); height: 913.5px;">
				<div class="bg" style="">
					<div style="background-color:#000;opacity:0.5;position:absolute;top: -76px;left:0;z-index:1;width: 121%;height: 108%;"></div>
				</div>
				<img src="img/box.gif"style="top:15%;z-index:3;" />
					<div class="img4-1 imgcomm" style="z-index: 3"></div>
			</div>
		</div>
		<!-- 形成月饼页 -->
		<div class="page page-3-1 hide page-click">
			<img src="img/a4-00.png" style="width:100%;position:absolute;bottom:-1px;left:0px;">
			<div class="zoom-page">
				<div class="img5-1 imgcomm "></div>
				<div class="img5-2 imgcomm hide cake"></div>
				<div class="img5-3 imgcomm hide cake"></div>
				<div class="img5-4 imgcomm hide cake"></div>
				<div class="img5-5 imgcomm hide cake"></div>
				<div class="img5-6 imgcomm hide cake"></div>
				<!-- 吐血值 -->
				<div class="heian-blood2 img5-7 imgcomm hide"></div>
				<div class="heian-blood2 img5-8 imgcomm hide"></div>
				<div class="heian-blood2 img5-9 imgcomm hide"></div>
				<div class="heian-blood2 img5-10 imgcomm hide"></div>
				<div class="heian-blood2 img5-11 imgcomm hide"></div>
				<!-- 祝福值 -->
				<div class="zhufu-blood2 img5-12 imgcomm hide"></div>
				<div class="zhufu-blood2 img5-13 imgcomm hide"></div>
				<div class="zhufu-blood2 img5-14 imgcomm hide"></div>
				<div class="zhufu-blood2 img5-15 imgcomm hide"></div>
				<div class="zhufu-blood2 img5-16 imgcomm hide"></div>
				<!-- 黑暗指数 -->
				<div class="img5-17 imgcomm"></div>
				<div class="star star1 imgcomm star-white "></div>
				<div class="star star2 imgcomm star-white "></div>
				<div class="star star3 imgcomm star-white "></div>
				<div class="star star4 imgcomm star-white "></div>
				<div class="star star5 imgcomm star-white "></div>
				<div class="pt-page-shake  img5-27 imgcomm imgclick"></div>
				<div class="pt-page-shake  img5-28 imgcomm imgclick"></div>
			</div>
		</div>
		<!-- 捎句话 送首歌 -->
		<div class="page page-4-1 hide">
			<img src="img/a4-00.png" style="width:100%;position:absolute;bottom:-1px;left:0px;">
			<div class="zoom-page">
			
				<div class="img6-1 imgcomm " id="back"></div>
				<div class="img6-2 imgcomm hide word"></div>
				<div class="img6-9 imgcomm hide song"></div>
				<div class="img6-3 imgcomm  hide word word-song" wordSong="1"></div>
				<div class="img6-5 imgcomm  hide word word-song" wordSong="2"></div>
  			    <div class="img6-7 imgcomm  hide word word-song" wordSong="3"></div>
				<div class="img6-10 imgcomm hide song word-song" wordSong="4"></div>
				<div class="img6-12 imgcomm hide song word-song" wordSong="5"></div>
			</div>
		</div>
		<!-- 分享页 -->
		<div class="page page-5-1 hide page-click">
		<img src="img/a4-00.png" style="width:100%;position:absolute;bottom:-1px;left:0px;">
			<div class="zoom-page">
			
				<div class=" img7-1 imgcomm "></div>
				<div class=" img7-2 imgcomm "></div>
				<div class=" img7-3 imgcomm " id="img7-3"></div>
				<div class=" img7-4 imgcomm " id="img7-4"></div>
				<div class="hide img705">
					<img class="im7ab" src="img/a2-00.png" class="background" style="width: 704px;left: -92px;position: absolute;z-index: 999;top: -80px;"  />
				</div>
			</div>
		</div>
</div>
<audio id="audio" loop="loop" src="img/sound.mp3" style="display:none;"></audio>
<!-- 页面内容  end-->
<!-- 统计访问量-->
<div style="display:none">
<script src="http://s95.cnzz.com/z_stat.php?id=1256433241&web_id=1256433241" language="JavaScript"></script>
</div>
	<script>
			var _czc = _czc || [];
			_czc.push(["_setAccount", "1256433241"]);
	</script>

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
	var wxTitle = "亲手做一个让别人狗带的月饼吧...";
	var wxLink = "http:\/\/h5.whaledream.com/whalemccooking/index.php";
	var imgUrl = "http:\/\/h5.whaledream.com/whalemccooking/icon.jpg";
	var wxDesc = "让五仁退出黑暗月饼界！！！";
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
			wx.showOptionMenu();
		});
		wx.ready(function() {
			wx.onMenuShareTimeline({
				title : wxTitle, // 分享标题
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});
			wx.onMenuShareAppMessage({
				title : wxTitle, // 分享标题
				desc : wxDesc, // 分享描述
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});
		});
	
</script>
<script>
		var audio = document.getElementById("audio");
		$(document).ready(function() {
			var loader = new PxLoader();
			var fileList = [
						
						"img/cont1.png",
						"img/cont2.png",
						"img/cont3.png",
						"img/cont4.png",
						"img/cont5.png",
						"img/loading_cover.png",
						"img/loading_img.png",
						"img/sound.mp3",
						"img/box.gif",
						"img/a1-00.png",
						"img/a2-00.png",
						"img/a2-01.png",
						"img/a3-00.png",
						"img/a4-00.png",
						"icon.jpg",
						"icon1.jpg"
				];
			for (var i = 0; i < fileList.length; i++) {
				var pxImage = fileList[i];
				pxImage.imageNumber = i + 1;
				loader.addImage(pxImage);
			}
			loader.addCompletionListener(function() {
				$("#loading").remove();
				$("#pageWrap").css("display", "block");
				audio.play();
			});
			loader.addProgressListener(function(e) {
				var percent = Math.round((e.completedCount / e.totalCount) * 100);
				$("#percentWrap").html(percent + "%");
				$("#loadingCover2").css("height",128-128*(e.completedCount/e.totalCount)+"px");
			});
			loader.start();
		});
</script>
</html>