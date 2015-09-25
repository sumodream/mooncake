//定义当前页面和最后页面
var now = {row : 1,col : 1};
var last = {row : 0,col : 0};
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
		//设定时间执行方法

		$(".pt-page-scaleUpIcon").hide();

		setTimeout(function() {
			$(lastPage).removeClass('page-current');
			$(lastPage).removeClass(outClass);
			$(lastPage).addClass("hide");
			$(lastPage).find("img").addClass("hide");
			$(lastPage).find(".for-show").addClass("hide");
			$(nowPage).addClass('page-current');
			$(nowPage).removeClass(inClass);
			$(nowPage).find("img").removeClass("hide");
			$(nowPage).find(".for-show").removeClass("hide");
			$(nowPage).find(".pt-page-scaleUpIcon").show();
			isAnimating = false;
		}, this._animation_time);
	},
	pageUp2 : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 2;
			now.col = 1;
			this.doAnimate(TOWORDS.UP);
		}
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
var timel;
function timeclick(){
	timel = setTimeout(function(){
		if(!($("#audio1").attr("src")=="")){
			audio1.pause();
		}
		audio2.play();
		$(".img4-01").remove();
		$(".img4-04").css("z-index","2");
		$(".img4-02").show();
		$(".img4-03, .img4-06").show();
		$(".moon_jj, .img4-05").show();
	},1300);
}


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
	
	var mc = new Hammer(document.getElementById("pageWrap"));
	mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
	mc.on("panup", function(ev) {
		if($(".page-current").hasClass("page-3-1")){
			pageAnimations.pageUp();
			timeclick();
		}
		if ($(".page-current").hasClass("page-4-1")) {
			pageAnimations.pageUp();
			clearTimeout(timel);
		};
		if ($(".page-current").hasClass("page-5-1")) {
			pageAnimations.pageUp();
		};
	});
});



$(document).ready(function(){
	$(".img1-3").click(function(){
		pageAnimations.pageUp();
		_czc.push(['_trackEvent', '点击', '领取', '中秋','5','']);
	});
	$(".img2-2").click(function(){
		pageAnimations.pageUp();
		if($("#audio1").attr("src").length<16){
			audio1.play();
			audio1.addEventListener("ended",function(evt) {
			if($(".page-current").hasClass("page-3-1")){
				pageAnimations.pageUp();
				timeclick();
			};
		});
		}
		_czc.push(['_trackEvent', '收下', '祝福', '中秋','5','']);
	});
	$(".img2-3").click(function(){
		pageAnimations.pageUp2();
		timeclick();
		_czc.push(['_trackEvent', '跳过', '祝福', '中秋','5','']);	
	});
	$(".img6-04").click(function(){
		_czc.push(['_trackEvent', '跳转', '一', '中秋','5','']);
		var timelast = setTimeout(function(){
			window.location.href='http://h5.whaledream.com/whalemccooking/';
		},700);
	});
	var myDate = new Date();
	
	var last = 1443181858755;
	var numpep = parseInt((myDate.getTime() - last)*0.001);

	if(numpep<0){
		numpep=0;
	}
	$(".zoom-page").first().append("<p class='numb_pep'></p>");
	$(".numb_pep").text(numpep);
	$(".img6-03").removeClass("pt-page-scaleUpIcon");
	$(".img6-03").addClass("pt-page-heartbeat");
	$(".moon_jj").css("left","132px");
	if($("#audio1").attr("src").length>15){
		$(".img2-1").css({"background":"transparent url('img/mes.png') -56px -35px no-repeat","background-size":"560px"});
	}
});


