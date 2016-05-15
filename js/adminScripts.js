function Actions_Admon() {

	this.createUser = function(){
		$("#form_editAdd_user")[0].reset();
		$('#event').val('{"action":"crear"}');
		$('#ModalForm').modal();
	};

	this.editUser = function(id_user){
		
        $.post("../../controllers/UsuarioController.php",{event:'{"action":"leerUser"}',id: id_user}, function(data, status){

          $.each(data['usuario'], function(obj, subObj){

          		$("input[name=identificacion]").val(subObj.identificacion);
          		$("input[name=nombre]").val(subObj.nombre);
          		$("input[name=apellido]").val(subObj.apellido);
          		$("input[name=userName]").val(subObj.userName);
          		$("input[name=email]").val(subObj.email);
          		$("input[name=telFijo]").val(subObj.telFijo);
          		$("input[name=telMovil]").val(subObj.telMovil);

          		$('select[name=tipoIdentificacion] option:eq('+ subObj.tipoIdentificacion +')').prop('selected', true);
          		$('select[name=tipoUsuario] option:eq('+ subObj.tipoUsuario +')').prop('selected', true);
          		$('select[name=estado] option:eq('+ subObj.estado +')').prop('selected', true);
          });

        },"json");			

		$('#event').val('{"action":"editar"}');
		$('#ModalForm').modal();
	};

	this.delUser = function(id_user){
		
		if (confirm('Esta seguro de eliminar el usuario!')) {

		}
	};

	this.cargue_doc = function(){
        $.post("../../controllers/UsuarioController.php",{event:'{"action":"leer"}'}, function(data, status){

          $('#dataUsers tr').remove();
          
          $.each(data['usuarios'], function(obj, subObj){
            span = '<span class="glyphicon glyphicon-edit"></span>';
            font = '<font class="changeLanguages" id="fontEditUser">Editar</font>';
            
            btn_edit = '<button type="button" class="btn btn-warning" id="btnEditUser" ';
            btn_edit += 'onclick="objActAdmon.editUser('+ obj +')"' +'>'+ font + '&nbsp;' + span +'</button>';

            span = '<span class="glyphicon glyphicon-remove-circle"></span>';
            font = '<font class="changeLanguages" id="fontDeltUser">Eliminar</font>';
            
            btn_del  = '<button type="button" class="btn btn-danger" id="btnDelUser" ';
            btn_del  += 'onclick="objActAdmon.delUser('+ obj +')"' + '> ' + font + '&nbsp;' + span +'</button>';

            body_tr = '<tr>';
            body_tr += '<td>' + subObj['identificacion'] + '</td>';
            body_tr += '<td>' + subObj['nombre'] + '</td>';
            body_tr += '<td>' + subObj['apellido'] + '</td>';
            body_tr += '<td>' + subObj['estado_text'] +'</td>';
            body_tr += '<td align="center">' + btn_edit + '&nbsp;&nbsp;&nbsp;' +btn_del +'</td>';
            body_tr += '</tr>';

            $("#dataUsers").append(body_tr);
          });
        },"json");		
	};
}

var objActAdmon = new Actions_Admon();