function Actions_Admon() {

	this.editUser = function(id_user){
		alert(id_user);
	};

	this.delUser = function(id_user){
		alert("eliminar usuario" + id_user);
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