// Отправка заявки 
$(document).ready(function() {
	$('#form').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form.event_id.value == '' || document.form.fio.value == '' || document.form.email.value == ''|| document.form.phone.value == '') {
			valid = false;
			return valid;
		}

		$(function()
{
    $("#form").validate(
      {
        rules: 
        {
          item: 
          {
            required: true
          }
        }
      });	
});
		$.ajax({
			type: "POST",
			url: "/api/send",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});



// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
	var popuptest = $('.popuptest');
	if (e.target!=popuptest[0]&&popuptest.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});

// Маска ввода номера телефона (плагин maskedinput)
$(function($){
	$('[name="phone"]').mask("+7(999) 999-9999");
});


// Отправка заявки 
$(document).ready(function() {
	$('#form2').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form2.fio.value == '' || document.form2.email.value == '' || document.form2.phone.value == '' || document.form2.message.value == '' ) {
			valid = false;
			return valid;
		}

		$(function()
{
    $("#form2").validate(
      {
        rules: 
        {
          item: 
          {
            required: true
          }
        }
      });	
});
		$.ajax({
			type: "POST",
			url: "/api/send",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$('.msg-popup').fadeOut();
			$(this).find('input').val('');
			$('#form2').trigger('reset');
		});
		return false;
	});
});



// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
	var popuptest = $('.popuptest');
	if (e.target!=popuptest[0]&&popuptest.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});

// Маска ввода номера телефона (плагин maskedinput)
$(function($){
	$('[name="phone"]').mask("+7(999) 999-9999");
});



// Отправка заявки 
$(document).ready(function() {
	$('#form3').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form3.fio.value == '' || document.form3.email.value == '' || document.form3.phone.value == '' || document.form3.message.value == '' ) {
			valid = false;
			return valid;
		}

		$(function()
{
    $("#form3").validate(
      {
        rules: 
        {
          item: 
          {
            required: true
          }
        }
      });	
});
		$.ajax({
			type: "POST",
			url: "/api/send",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$('.msg-popup').fadeOut();
			$(this).find('input').val('');
			$('#form2').trigger('reset');
		});
		return false;
	});
});



// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
	var popuptest = $('.popuptest');
	if (e.target!=popuptest[0]&&popuptest.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});

// Маска ввода номера телефона (плагин maskedinput)
$(function($){
	$('[name="phone"]').mask("+7(999) 999-9999");
});










// Отправка заявки 
$(document).ready(function() {
	$('#form5').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
// 		if (document.form5.name.value == '' || document.form5.email.value == '' || document.form5.phone.value == ''  ) {
// 			valid = false;
// 			return valid;
// 		}

// 		$(function()
// {
//     $("#form5").validate(
//       {
//         rules: 
//         {
//           item: 
//           {
//             required: true
//           }
//         }
//       });	
// });
		$.ajax({
			type: "POST",
			url: "/api/sponsor",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$('.app-popup').fadeOut();
			$(this).find('input').val('');
			$('#form5').trigger('reset');
		});
		return false;
	});
});



// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
	var popuptest = $('.popuptest');
	if (e.target!=popuptest[0]&&popuptest.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});

// Маска ввода номера телефона (плагин maskedinput)
$(function($){
	$('[name="phone5"]').mask("+7(999) 999-9999");
});





let formResult=document.getElementById('formResult');
let formResult2=document.getElementById('type');
function showModal(type){
	document.getElementById("apps").style.display = "block";
	let title;
	if(type === individual){
		title = 'Individual';
	} else if (type === associate){
		title = 'Associate';
	} else if (type === smallCorp){
		title = 'Small Corporate';
	} else if (type === largeCorp){
		title = 'Large Corporate';
	} 
	
	formResult.innerHTML = title;
	formResult2.value = title;
}








