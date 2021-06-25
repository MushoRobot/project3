
/*-- ==============     type writter effect    ===================== --*/

// ES6 Class
class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if(this.isDeleting) {
      // Remove char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 300;

    if(this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if(this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}


// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}

/* -- =====================================================  --*/


//speed oading

$(window).on("load" ,function(){
  $(".load .sk-chase").fadeOut(2000 ,
       function(){
        $(this).parent().fadeOut(1000 );
    } );
});


/*--====================================================--*/


function fun() {
    "use strict";
    var a = document.getElementById("code");
    if ( (a.value) == 55555)
        {
          document.location.href = "..\come.html";
           
        }
    else
        {
            
            document.getElementById("v").innerHTML = "code is wrong";       
        }
    
}
/*--====================================8--*/

$(function() {
    "use strict";
    //---- first name
  $(".user-f").keyup(function(){
    if($(this).val().length <3){
      $(this).css('border' , '1px solid #a00');
$(this).parent().find('.alert-f').fadeIn(300);     
}
else{
      $(this).css('border' , '1px solid #0a0');
$(this).parent().find('.alert-f').fadeOut(300);     
}
  });
  
    //---- last nae
  $(".user-l").keyup(function(){
    if($(this).val().length <3){
      $(this).css('border' , '1px solid #a00');
$(this).parent().find('.alert-l').fadeIn(300);     
}
else{
      $(this).css('border' , '1px solid #0a0');
$(this).parent().find('.alert-l').fadeOut(300);     
}
  });
  
  
   //---- number
  $(".num").keyup(function(){
    if(isNaN($(this).val())){
      $(this).css('border' , '1px solid #a00');
$(this).parent().find('.alert-c').fadeIn(300);     
}
else if($(this).val().length <11 &&  (isNaN($(this).val() ) == 0)) {
      $(this).css('border' , '1px solid #a00');
$(this).parent().find('.alert-c').fadeOut(300);
$(this).parent().find('.alert-n').fadeIn(300);     

}
else {
      $(this).css('border' , '1px solid #0a0');
$(this).parent().find('.alert-c').fadeOut(300);
$(this).parent().find('.alert-n').fadeOut(300);     

}

  });
  
  
});