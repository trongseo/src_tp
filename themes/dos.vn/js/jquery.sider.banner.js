function runbanner(w, h){
	$('.slider').advancedSlider({
			width:w, 
			height:h, 
			pauseSlideshowOnHover:false,
			sliceDelay:'50', //Thoi gian xuat hien anh
			slideshowDelay:3000, // thoi gian chuyen doi hinh anh
			slideProperties:{effectType:'random',captionShowEffect:'random'},
		});
}
