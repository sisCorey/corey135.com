$(function(){
	dragReSize.start("viewer");
})

var dragReSize = {
	source:'',
	panel:'',
	image:null,
	imageSize:{},
	init:function(option){
		console.log("init")
		this.option  = $.extend(this.option, option);
		this.panel = $("#"+this.option.id);
		this.source = $("#"+this.option.id+" #drag");
	},
	start:function(id){
		console.log("start")
		var self = this;
		var o = {id:id};
		this.init(o);
		this.source.unbind('mousedown').bind("mousedown",function(){
			self.onPress();
		});
	},
	onPress:function(){
		console.log("mousedown")
		var self = this;
		self.onMove();
		self.panel.unbind('mouseup').bind("mouseup",function(){
			self.onRelease();
		});
	},
	onMove:function(){
		console.log("mousemoving")
		var self = this;
		var viewer = this.panel;
		var source = this.source;
		viewer.unbind("mousemove").bind("mousemove",function(e){
			console.log("mousemove...")
			var sy = source.position().top;
			var sx = source.position().left;
			var tx = e.clientX;
			var ty = e.clientY;
			var distance = Math.sqrt((tx-sx)*(tx-sx)+(ty-sy)*(ty-sy));
			var mx = viewer[0].clientWidth;
			var my = viewer[0].clientHeight;
			var mDistance = Math.sqrt((mx-sx)*(mx-sx)+(my-sy)*(my-sy));
				imageSrc = self.panel.find(".image").css('background-image');
				imageSrc = imageSrc.replace(/^url\([\'\"]{0,1}/gi,'')
				imageSrc = imageSrc.replace(/[\'\"]{0,1}\)$/gi,'')
				self.image = new Image;
				self.image.src = imageSrc;
				self.imageSize.width = self.image.width;
				self.imageSize.height = self.image.height;
			if (mx < my) {
				var _scale = self.imageSize.height/my;
				var _backRealWidth = _scale*self.imageSize.width;
				console.log(_backRealWidth);
				self.imageSize.widthScale = (_backRealWidth/mx*100);
			}
			else {
				self.imageSize.widthScale = '100%';
			}
			var rate = 1 - distance/mDistance;
			self.reSize(rate);
		})
	},
	onRelease:function(){
		console.log("mousemup")
		this.panel.unbind('mousemove');
		this.panel.unbind('mouseup');
		this.panel.find(".image").animate({'background-size':this.imageSize.widthScale+'%'});
		window.getSelection().removeAllRanges();
	},
	reSize:function(val){
		if (val < 0.1) val = 0.1;
		val = val*100;
		//this.panel.find(".image").animate({'background-size':val+'%'})
		this.panel.find(".image").css({'background-size':val+'%'})
	}
}

function touchMove(event) {
     event.preventDefault();
     console.log(event)
}
 
// $("#drag").bind("touchmove", touchMove);