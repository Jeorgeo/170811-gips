var inputHeight = document.getElementById('height');
var inputWidth = document.getElementById('width');
var inputArea = document.getElementById('area');
var inputPrice = document.getElementById('price');
var inputMail = document.getElementById('mail');
var labelArea = document.getElementById('label-area');
var labelPrice = document.getElementById('label-price');
var btnCalculate = document.getElementById('calculate');
var btnSubmit = document.getElementById('order');
var separator = ',';
var newDot = '.';
var PRICE = 380 / 0.25;


btnCalculate.addEventListener('click', calculateArea);

function calculateArea() {
  valueHeight = inputHeight.value;
  valueWidth = inputWidth.value;
  arrHeight = valueHeight.split(separator);
  arrWidth = valueWidth.split(separator);

 if (arrHeight.length == 2) {
    newHeight = arrHeight[0] + newDot + arrHeight[1];
  } else {
    newHeight = valueHeight;
  }

 if (arrWidth.length == 2) {
    newWidth = arrWidth[0] + newDot + arrWidth[1];
  } else {
    newWidth = valueWidth;
  }

  newArea = newHeight * newWidth;
  newPrice = newArea * PRICE;

if (isNaN(newArea)) {
  inputArea.value = 'проверьте данные';
  inputPrice.value = 'проверьте данные';
} else {
  inputArea.value = newArea;
  inputPrice.value = newPrice;
}

  inputArea.classList.add('show-block');
  inputPrice.classList.add('show-block');
  inputMail.classList.add('show-block');
  labelArea.classList.add('show-block');
  labelPrice.classList.add('show-block');
  btnCalculate.classList.add('show-block');
  btnSubmit.classList.add('show-block');
}

$(document).ready(function() {

	//E-mail Ajax Send
	$("#js_form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо! Мы свяжемся с вами в ближайшее время!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
