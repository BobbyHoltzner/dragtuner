// Change the toggles on New Run Form
$('#lane-choice').bootstrapToggle({
  on: 'Left',
  off: 'Right'
});

$('#distance').bootstrapToggle({
  on: '1/8',
  off: '1/4'
});

new Vue({
	el: '#newRun',

	data:{
		quarterMile: '',
	},

	ready: function() {
		
	},

	methods:{
		
	},
});

 $("div.fileDropzone").dropzone({ url: "/file/post" });

$(document).ready(function(){

	var btnWidth = $('#addRun').width();
	btnWidth = btnWidth * 1.1;

	$('#addRun').hover(function(){
		$(this).width(btnWidth);
	}, function(){
		$(this).width(btnWidth / 1.1);
	});

});


