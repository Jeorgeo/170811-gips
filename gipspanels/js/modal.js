
// popup windows



var link = document.querySelectorAll(".button");

var i_name = document.getElementsByTagName("h2");

var i_title = document.querySelectorAll("h2.woocommerce-loop-product__title");

var i_price = document.querySelectorAll(".woocommerce-Price-amount");

var popup = document.querySelector(".popup-question");

var close = document.querySelector(".popup-question-close");

var win_popup = document.querySelector(".wrap");

var form_title = document.getElementById('indicator-title');

var form_price = document.getElementById('indicator-price');

var btnRequest = document.querySelectorAll('.js_popup-btn');

var i = 0;

var x = 0;

var z = link.length;

for (var k = 0; k < btnRequest.length; k++) {

  btnRequest[k].addEventListener('click', function(event) {

     event.preventDefault();

     var self = event.target;

     if (self.classList.contains("js_popup-btn")) {
       popup.classList.add("modal-content-show");
       win_popup.classList.add("modal-content-show");
       } else {
         return;
     }
  });
}

for (var i = 0; i < z; i++) {

  link[i].addEventListener('click', function(event) {

     event.preventDefault();

     var self = event.target;

     if (self.classList.contains("button")) {

     var n = z;

     while(n--) {

        if(link[n] == self) {

           var x = n;

           break;

        }

     }

     box_name = i_name[x];

     box_title = i_title[x];

     box_price = i_price[x];

     if (box_title) {

       form_title.value  = box_title.innerText;

       if (box_price) {
         form_price.value = box_price.innerText;
       };

     } else {

       form_title.value = box_name.innerText;

       if (box_price.value) {
         form_price.value = box_price.innerText;
       };

     };

     popup.classList.add("modal-content-show");

     win_popup.classList.add("modal-content-show");

     } else {

       return;

     }

  });

}

function removePopup() {
  popup.classList.remove("modal-content-show");

  win_popup.classList.remove("modal-content-show");
}



close.addEventListener("click", function(event) {

  event.preventDefault();

  removePopup();

});



window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

    }

  }

});



win_popup.addEventListener("click", function(event) {

  if (win_popup.classList.contains("modal-content-show")) {

    removePopup();

  }

});

$(document).ready(function() {

	//E-mail Ajax Send
	$("#js_form2").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "amocrm/handler1.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо! Мы свяжемся с вами в ближайшее время!");
			removePopup();
		});
		return false;
	});

});
