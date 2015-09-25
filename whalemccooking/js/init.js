//定义当前页面和最后页面
var now = {row : 1,col : 1};
var last = {row : 0,col : 0};
var pageTimeout = null;
//定义常量 上右下左消失
const TOWORDS = {
	UP : 1,
	RIGHT : 2,
	DOWN : 3,
	LEFT : 4,
	FADEOUT:5,
};
//初始动画
var isAnimating = false;
//定义动画页面
var pageAnimations = {
	//页面计数 4页
	_page_count : 5,
	//页面动画时间600毫秒
	_animation_time : 600,
	//动画方法
	doAnimate : function(towards) {
		//定义前一个页面和当前页面类
		var lastPage = ".page-" + last.row + "-" + last.col;
		var nowPage = ".page-" + now.row + "-" + now.col;
		//做判断 行驶的方向
		switch(towards) {
		case TOWORDS.UP:
			outClass = 'pt-page-moveToTop';
			inClass = 'pt-page-moveFromBottom';
			break;
		case TOWORDS.RIGHT:
			outClass = 'pt-page-moveToRight';
			inClass = 'pt-page-moveFromLeft';
			break;
		case TOWORDS.DOWN:
			outClass = 'pt-page-moveToBottom';
			inClass = 'pt-page-moveFromTop';
			break;
		case TOWORDS.LEFT:
			outClass = 'pt-page-moveToLeft';
			inClass = 'pt-page-moveFromRight';
			break;
		case TOWORDS.FADEOUT:
			outClass = 'pt-page-scaleDown-slow';
			inClass = 'pt-page-scaleUp';
			break;
		case TOWORDS.NORMAL:
			outClass = 'pt-page-scaleDown-quick';
			inClass = 'pt-page-scaleUp';
			break;
		}
		//动画开始运行
		isAnimating = true;
		//当前页面动画隐藏
		$(nowPage).removeClass("hide");
		//前一个页面动画
		$(lastPage).addClass(outClass);
		//当前页面动画
		$(nowPage).addClass(inClass);
		pageTimeout == null;
		//设定时间执行方法
		setTimeout(function() {
			$(lastPage).removeClass('page-current');
			$(lastPage).removeClass(outClass);
			$(lastPage).addClass("hide");
			$(lastPage).find(".for-show").addClass("hide");
			$(nowPage).addClass('page-current');
			$(nowPage).removeClass(inClass);
			$("#blackBlock2").addClass("hide");
			isAnimating = false;
		}, this._animation_time);
	},
	pageUp : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.UP);
		}
	},
	pageLeft : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.LEFT);
		}
	},
	pageDown : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != 1) {
			now.row = last.row - 1;
			now.col = 1;
			this.doAnimate(TOWORDS.DOWN);
		}
	},
	pageRight : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.RIGHT);
		}
	},
	pageFadeOut : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.FADEOUT);
		}
	},
	pageFadeOutTwo : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 2;
			now.col = 1;
			this.doAnimate(TOWORDS.FADEOUT);
		}
	},
	pageNormal : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.NORMAL);
		}
	}
};
function zoomResize(){
    var ratio = parseFloat(innerWidth / 540);
    $(".zoom-page").css("transform", "scale(" + ratio + "," + ratio + ")");
    $(".zoom-page").css("-webkit-transform", "scale(" + ratio + "," + ratio + ")");
    $(".zoom-page").css("height",innerHeight/ratio);
}
$(window).resize(function(){
	zoomResize();
});
//under here is some page logic
$(document).ready(function() {
	zoomResize();	
});
var wordSong = 0;
var zhufu = 0;
var heian = 0;
function initBtn(){
	$(".addScore").click(function(){
		
		if($(this).find(".unselect").eq(0).hasClass('hide')){
			$(this).find(".unselect").removeClass('hide');
			$(this).find(".selected").addClass('hide');
			zhufu -= 100;
		}else{
			$(this).find(".unselect").addClass('hide');
			$(this).find(".selected").removeClass('hide');
			zhufu += 100;
		}
		refreshzhufu();
	});
	$(".subScore").click(function(){
		
		if($(this).find(".unselect").eq(0).hasClass('hide')){
			$(this).find(".unselect").removeClass('hide');
			$(this).find(".selected").addClass('hide');
			heian -= 100;
		}else{
			$(this).find(".unselect").addClass('hide');
			$(this).find(".selected").removeClass('hide');
			heian += 100;
		}
		refreshHeian();
	});
	$("#startCooking").click(function(){
		_czc.push(['_trackEvent', '制作月饼', '中秋','5','']);
		if((heian-zhufu)<100){
				$("#blackBlock").removeClass("hide");
		}else{
			$("#blackBlock2").removeClass("hide");
			//黑暗指数
			$(".star").removeClass('star-black').addClass('star-white');
			for(var i = 0;i<(heian-zhufu)/100;i++){
				$(".star").eq(i).removeClass('star-white').addClass('star-black');
			}
			//吐血值;
			$(".heian-blood2").addClass('hide');
			$(".heian-blood2").eq(heian/100-1).removeClass('hide');
			//祝福值
			$(".zhufu-blood2").addClass('hide');
			if(zhufu!=0){
				$(".zhufu-blood2").eq(zhufu/100-1).removeClass('hide');
			}
			//月饼
			$(".cake").addClass('hide');
			$(".cake").eq((heian-zhufu)/100-1).removeClass('hide');
			pageTimeout = setTimeout(function(){
				pageAnimations.pageUp();
			},3000);
		}
	});
	$("#blackBlock").click(function(){
		_czc.push(['_trackEvent', '制作未成功', '一', '中秋','5','']);
		$(this).addClass('hide');
	});
	$(".word-song").click(function(){
		_czc.push(['_trackEvent', '送祝福或歌', '一', '中秋','5','']);
		wordSong = $(this).attr("wordSong");
		pageAnimations.pageUp();	

		wxTitle = "你敢保证点开以后不跟我绝交吗？";
		wxLink = "http:\/\/h5.whaledream.com/whalemc/index_"+(heian-zhufu)/100+"_"+wordSong+".php";
		imgUrl = "http:\/\/h5.whaledream.com/whalemccooking/icon1.jpg";
		wxDesc = "放心吧，绝对不会送你五仁月饼！";	

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
}
function refreshzhufu(){
	if(zhufu<100){
		$(".zhufu-title").addClass('hide');
		$(".bloodnum1").addClass('hide');
	}else{
		$(".zhufu-title").removeClass('hide');
		$(".bloodnum1").addClass('hide');
		$(".bloodnum1").eq(Math.floor(zhufu/100)-1).removeClass('hide');
	}
	$(".zhufu-blood").addClass('hide');
	for(var i= 0;i<zhufu/100;i++){
		$(".zhufu-blood").eq(i).removeClass('hide');
	}
}
function refreshHeian(){
	if(heian<100){
		$(".heian-title").addClass('hide');
		$(".bloodnum").addClass('hide');
	}else{
		$(".heian-title").removeClass('hide');
		$(".bloodnum").addClass('hide');
		$(".bloodnum").eq(Math.floor(heian/100)-1).removeClass('hide');
	}
	$(".heian-blood").addClass('hide');
	for(var i= 0;i<heian/100;i++){
		$(".heian-blood").eq(i).removeClass('hide');
	}
}
$(document).ready(function(){
	$("#img7-3").click(function(){
		_czc.push(['_trackEvent', 'restart', '一', '中秋','5','']);
		location.reload();	
	});
	$(".img7-4").click(function(){
		_czc.push(['_trackEvent', 'share', '一', '中秋','5','']);
		$(".img705").show();
	});
	$(".im7ab").click(function(){
		
		$(".img705").hide();
	});	
	$(".img1-4").click(function(){
		_czc.push(['_trackEvent', '首页', '一', '中秋','5','']);
		pageAnimations.pageUp();
	});
	$(".img5-27").click(function(){
		_czc.push(['_trackEvent', '捎句话', '一', '中秋','5','']);
		pageAnimations.pageUp();
		$(".song").hide();
		$(".word").show();
	});	
	$(".img5-28").click(function(){
		_czc.push(['_trackEvent', '送首歌', '一', '中秋','5','']);
		pageAnimations.pageUp();
		$(".word").hide();
		$(".song").show();
	});
	$(".img6-1").click(function(){
		
		pageAnimations.pageDown();
	});
	initBtn();
	var mc = new Hammer(document.getElementById("pageWrap"));
	mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
	mc.on("panup", function(ev) {
		if ($(".page-current").hasClass("page-click")) {
		}else{
			pageAnimations.pageUp();
		};		
	});
});