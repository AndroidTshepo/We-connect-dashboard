$('#view').click(function(){
    $('.black_overlay').fadeIn('fast');
    $('.hidden_editable_on_pending').fadeIn(2000);
});

//on click true/false
$('.truefalse').click(function(){
    $('.choose_holder').fadeOut('fast');
    $('.multiplechoice_holder').fadeOut('fast');
     $('.rate_holder').fadeOut('fast');
    $('.true_holder').fadeIn('fast');
});
//on click multiplechoice
$('.multiplechoice').click(function(){
    $('.choose_holder').fadeOut('fast');
    $('.rate_holder').fadeOut('fast');
    $('.true_holder').fadeOut('fast');
    $('.multiplechoice_holder').fadeIn('fast');
});
//on click rate
$('.rate').click(function(){
    $('.choose_holder').fadeOut('fast');
    $('.multiplechoice_holder').fadeOut('fast');
    $('.true_holder').fadeOut('fast');
    $('.rate_holder').fadeIn('fast');
});
//on click choose
$('.choose').click(function(){
    $('.multiplechoice_holder').fadeOut('fast');
    $('.true_holder').fadeOut('fast');
    $('.rate_holder').fadeOut('fast');
    $('.choose_holder').fadeIn('fast');
//    $(".choose_holder").show( "slide", {direction: "left" });
});
$("input[type='image']").click(function() {
    $("input[id='fileToUpload']").click();
});


var filename;
 var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
				 
            }
            
            reader.readAsDataURL(input.files[0]);
			
        }
    }
    
    $("#fileToUpload").change(function(){
        readURL(this);
	
    });

