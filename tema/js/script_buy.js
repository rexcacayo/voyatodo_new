var buy_code = new Array();
var buy_value = new Array();
var buy_tickets = new Array();
var baseurl = window.location.protocol +"//" + window.location.host + '/voyatodo/web/';

$(document).on('click',"#btn-cal",function() {
	$.ajax({
    	type: 'post',
        data: {
        	id: $("#pkevent").val(),
        },
		url: baseurl + 'evento/generatecalendar',
    	success: function(data){
    		if(data != ''){
    			downloadFile(generateData(data), 'calendario.ics');
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

function downloadFile(content, nameFile) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var save = document.createElement('a');
        save.href = event.target.result;
        save.target = '_blank';
        save.download = nameFile || 'archivo.dat';
        var clicEvent = new MouseEvent('click', {
            'view': window,
                'bubbles': true,
                'cancelable': true
        });
        save.dispatchEvent(clicEvent);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    };
    reader.readAsDataURL(content);
};

//Genera un objeto Blob con los datos en un archivo ics
function generateData(data) {
    var format = data.split(',');
    $.each( format, function( i, item ) {
	  format[i] = format[i]+'\n';
	});
    return new Blob(format, {
        type: 'text/ics'
    });
};

/****** Todo lo relacionado con la compra ***/

$(document).on("change",".buy_free",function() {
	var code = $(this).attr("name");
	var cant = $(".buy_free" + code + " option:selected").val();
	var id = $(this).attr("data-ticket");
	var flag = true;
	if(buy_code.length == 0){
		buy_code.push(code);
		buy_value.push(cant);
		buy_tickets.push(id);
	}
	else{
		$.each(buy_code, function(i, item){
			if(buy_code[i] == code){
				buy_value[i] = cant;
				buy_tickets[i] = id;
				flag = false;
			}
		});
		if(flag){
			buy_code.push(code);
			buy_value.push(cant);
			buy_tickets.push(id);
		}		
	}
});

$(document).on("change",".buy_pay",function() { 
	var code = $(this).attr("name");
	var cant = $(".buy_pay" + code + " option:selected").val();
	var id = $(this).attr("data-ticket");
	var flag = true;
	if(buy_code.length == 0){
		buy_code.push(code);
		buy_value.push(cant);
		buy_tickets.push(id);
	}
	else{
		$.each(buy_code, function(i, item){
			if(buy_code[i] == code){
				buy_value[i] = cant;
				buy_tickets[i] = id;
				flag = false;
			}
		});
		if(flag){
			buy_code.push(code);
			buy_value.push(cant);
			buy_tickets.push(id);
		}		
	}
});

$(document).on("change",".buy_crowfunding",function() {
	var code = $(this).attr("name");
	var cant = $(".buy_crowfunding" + code + " option:selected").val();
	var id = $(this).attr("data-ticket");
	var flag = true;
	if(buy_code.length == 0){
		buy_code.push(code);
		buy_value.push(cant);
		buy_tickets.push(id);
	}
	else{
		$.each(buy_code, function(i, item){
			if(buy_code[i] == code){
				buy_value[i] = cant;
				buy_tickets[i] = id;
				flag = false;
			}
		});
		if(flag){
			buy_code.push(code);
			buy_value.push(cant);
			buy_tickets.push(id);
		}		
	} 
});

$(document).on("click","#btn_valtickets",function() { 
	if(buy_tickets.length == 0){
		$('#modal-form-tickets').modal('hide');
		swal({
          title: "",
          text: "Debes de seleccionar por lo menos un ticket.",
          type: "error"
        });
	}
	else{
		var id='';
		var total = 0;
		$('.list_tickets').html('');
		$('.total_pay').html('');
		$.each(buy_tickets, function(i, item){
			if(!isNaN(parseFloat(buy_value[i])) && buy_value[i] > 0 && buy_value[i] != ''){
				$.ajax({
			    	type: 'post',
			        data: {
			        	id: buy_tickets[i],
			        },
					url:  baseurl +  'evento/getticket',
			    	success: function(data){
			    		if(data != ''){
							var div='';
			    			var ticket = JSON.parse(data);
			    			if(ticket.fktipetickect == 3){
			    				if(ticket.ticket_value != null)
			    					value = ticket.ticket_value;
			    				div='<li class="modal_tickets" name="'+ticket.pkticket+'" data-quantity="'+buy_value[i]+'"><h4>'
			    					+ticket.ticket_name+'</h4><p>'+ticket.ticket_description
			    					+'</p><div class="clearfix"></div><div class="row clear-list"><div class="col-md-6"><span>'
			    					+buy_value[i]+'</span> Cantidad de entradas</div></div><h4>INCENTIVO</h4><p>'
			    					+ticket.ticket_insentive+'</p></li>';
			    				total += parseFloat(buy_value[i]*value);
			    			}
			    			else{
			    				var value=0;
			    				if(ticket.ticket_value != null)
			    					value = ticket.ticket_value;
			    				div= '<li class="modal_tickets" name="'+ticket.pkticket+'" data-quantity="'+buy_value[i]
			    					+'"<h3 class="pull-left">'+value+' COP </h3><div class="pull-right"><select><option>'
			    					+buy_value[i]+'</option></select></div><div class="clearfix"></div><h4>'
			    					+ticket.ticket_name+'</h4><p>'+ticket.ticket_description+'</p><div class="clearfix"></div><div class="row clear-list">'+
			    					'<div class="col-md-6"><span> '+buy_value[i]+' de '+ticket.ticket_qty+' </span>Compradas</div></div></li>';
			    				total += parseFloat(buy_value[i])*value;
			    			}
							$('.list_tickets').append(div);
							$('.btn_buy_hidden').removeClass('hidden');
							$('.total_pay').html(total+' COP');
			    		}
			    	}
				});
			}
		});
	}
});

$(document).on("click","#btn_comprar",function() {
	$('#modal-form-tickets').modal('hide');
	$.ajax({
    	type: 'post',
        data: {
        	id: $("#pkevent").val(),
        },
		url:  baseurl + 'evento/getform',
    	success: function(data){
    		if(data != ''){
	    		var div = '<form class="body_modal" id="form_register">';
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
					div += '<div class="form-group"><div class="controls"><label>'+item.formeventgeneric
						+'</label><div class="form-group required"><input type="text" class="lbl_form requiredField" name="attribute" data-id-field="'+item.pkformeventgeneric+'" placeholder="'
						+item.formeventgeneric+'"><div class="help-block"></div></div></div></div>';
				});
				div += '<div class="row"><div class="col-md-8 col-md-offset-2"><a class="btn btn-block btn_buy" id="end_buy">FINALIZAR COMPRA</a></div></div></form>';
				$('.content_form').html(div);
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on("click","#end_buy",function() {
	validateFormdinamic();
	$('#form_register').submit();
});

function validateFormdinamic(){
	"use strict";
    var form_register = $('#form_register');
    var error_form_register = $('.alert-danger', form_register);
    var success_form_register = $('.alert-success', form_register);

    var msg_required = "Este campo es requerido";
    var msg_minlength = "Necesitamos por lo menos {0} caracteres";
    var msg_maxlength = "Necesitamos m&aacute;ximo {0} caracteres";;

    form_register.validate({
        errorElement: 'div', //default input error message container
        errorClass: 'vd_red', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            attribute:{
              required:true,
              minlength:1,
              maxlength:300,
            },
        },
        messages: {
            attribute:{
              required: msg_required,
              minlength: msg_minlength,
              maxlength: msg_maxlength,
            },
       	},
       	submitHandler: function() {
			    swal({title: "Confirmar compra",   
				text: "Al dar click en SI tu compra será efectuada",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",  
				confirmButtonText: "SI",
				cancelButtonText: "NO",
				closeOnConfirm: false,   
				closeOnCancel: false 
			}, function(isConfirm){   
					if (isConfirm) {
						var json_form='[';
						$(".lbl_form").each(function (index) {
							json_form += '{"pkformeventgeneric":"'+$(this).attr('data-id-field')+'",';
							json_form += '"value":"'+$(this).val()+'"},';
				        })
				        json_form = json_form.substring(0, json_form.length-1);
				        json_form += ']';
				        var json_tickets='[';
				        $.each(buy_tickets, function(i, item){
							if(!isNaN(parseFloat(buy_value[i])) && buy_value[i] > 0 && buy_value[i] != ''){
			    				json_tickets += '{"pkticket":'+buy_tickets[i]+',';
			    				json_tickets += '"ticket_value":'+buy_value[i]+'},';
			    			}
						});
						json_tickets = json_tickets.substring(0, json_tickets.length-1);
						json_tickets+=']';
						$.ajax({
					    	type: 'post',
					        data: {
					        	json_form: json_form,
					        	json_tickets: json_tickets,
					        },
							url:  baseurl + 'evento/registro',
					    	success: function(data){
					    		if(data == '1'){
									swal("", "Su compra ha sido exitosa. Revisa tu correo", "success");
									$('#modal-form-dinamic').modal('hide');
					    		}
					    		else
					    			if(data == '2'){
					    				swal("", "No tienes una cuenta de banco o tarjeta registrada", "error");
					    				$('#modal-form-dinamic').modal('hide');
					    			}
									else{
										swal("", "Ocurrio un problema con tu compra", "error");   
										$('#modal-form-dinamic').modal('hide');
									}
					    	}
						});
					} 
					else {
						$('#modal-form-dinamic').modal('hide');
				   		swal("", "Tu compra fue cancelada", "error");   
				   	} 
			 	}
			 );
	    }
   });
}

/****** Termina todo lo relacionado con la compra ***/

/**** Compra de prodcutos ****/

$(document).on("click",".carrito",function() {
	if($(".qty_product option:selected").val() != '0'){
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: $(this).attr("name"),
	        	date: $(".date_product option:selected").val(),
	        	cant: $(".qty_product option:selected").val(),
	        },
			url:  baseurl + 'producto/setproduct',
	    	success: function(data){
	    		if(data != '')
					$('.div_car').html(data);
				else
					swal("", "Ocurrio un problema", "error");   
	    	}
		});
	}
	else
		swal("", "Selecciona la cantidad", "warning");
});

$(document).on("click",".btn_pay_product",function(){
	$('#modal_buy').modal('hide');
});

$(document).on("click",".btn_next_product",function(){
	$('#modal_information').modal('hide');
});

/**** Compra de prodcutos ****/