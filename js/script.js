$(function() {
  $('.chart').easyPieChart({
    scaleColor: "green",
    lineWidth: 20,
    lineCap: 'butt',
    barColor: 'gray',
    trackColor:	"#ecf0f1",

    size: 120,
    animate: 500
  });
});


// ********************contact form styles

$(function(){

  var isOpen=false;

	$('.contact').on('click',function(){

		 if(isOpen == false){
       $('.contactScroll').animate({height:"60vh"},1000);
       $('header').animate({top:"60vh"},1000);
    
    isOpen=true;

    }
    else{
       $('.menuScroll').animate({height:"0vh"},1000);
       $('.contactScroll').animate({height:"0vh"},1000);
        $('header').animate({top:"0"},1000);

                
  isOpen=false;
  } 
	});


  $('.menuScroll a').on('click',function(){
    if(isOpen == false){
       $('.menuScroll').animate({height:"60vh"},1000);
       $('header').animate({top:"60vh"},1000);
    
    isOpen=true;

    }
    else{
       $('.menuScroll').animate({height:"0vh"},1000);
        $('header').animate({top:"0"},1000);
        $('.contactScroll').animate({height:"0vh"},1000);
                
    isOpen=false;
    }
  });


  $('.menuTab').on('click',function(){

     if(isOpen == false){
       $('.menuScroll').animate({height:"60vh"},1000);
       $('header').animate({top:"60vh"},1000);
    
    isOpen=true;

    }
    else{
       $('.menuScroll').animate({height:"0vh"},1000);
        $('header').animate({top:"0"},1000);
        $('.contactScroll').animate({height:"0vh"},1000);
                
isOpen=false;
}
  });

  //   $('.submit').on('click',function(e){

  //    if(isOpen == false){
  //      e.preventDefault();
    

  //   }
  
  // });
  $('#contact').validate({

    rules:{
        visitorname:"required",

        visitoremail:{
          required:true,
          email:true
           },

        visitormessage:"required",
      },
    messages:{

         visitoremail:"",
        visitorname:"",
        
       
        

        visitormessage:""
      },


    

    // wrapper: "div",

      highlight:function(el,errorClass){
        $(el).addClass('animated shake');
        $(el).prev().addClass('visible');
        $(el).on('animationend',function(){
          $(this).removeClass('animated shake');
        
        });
      },
    unhighlight:function(el,errorClass){
      $(el).prev().removeClass('visible');
      console.log(this);
      }
   });
  

  $('textarea').autogrow();


  $('header > div > a').on('click', function(){
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 2500);
  });

});











    
  










