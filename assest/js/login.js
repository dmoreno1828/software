jQuery(document).ready(function() {
   
   "use strict";
   
  jQuery("#login").validate({
      rules: {
			 
				password: {
					required: true,
					minlength: 5
				},
			 
				email: {
					required: true,
					email: true
				} 
			},
			messages: {
				 
				password: {
					required: "Ingrese su contraseña",
					minlength: "Su contraseña debe tener mas de 5 caracteres"
				},
				email: "Ingrese una dirección de correo valida" 
			},
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});