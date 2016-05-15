<form action="../../controllers/UsuarioController.php" class="form-horizontal" method="POST" id="form_editAdd_user"> 
  <div class="form-group">            
      <label for="tpoIde" id="tpoIdeLabel" class="changeLanguages col-sm-2">Tipo Identificación:</label>
      <div class="col-sm-10">
        <select name="tipoIdentificacion" id="tpoIde" class="form-control" required="required">
          <option value="" id="optIdent0" class="changeLanguages">Seleccionar</option>
          <option value="1" id="optIdent1" class="changeLanguages">Cedula</option>
          <option value="2" id="optIdent2" class="changeLanguages">Cedula Extranjera</option>
          <option value="3" id="optIdent3" class="changeLanguages">Tarjeta de Identidad</option>
        </select>
      </div>         
  </div>
  <div class="form-group">            
      <label for="Ide" id="IdeLabel" class="changeLanguages col-sm-2">Identificación:</label>
      <div class="col-sm-10"><input type="text" name="identificacion" id="Ide" placeholder="Identificación" class="form-control changeLanguages"/> </div>         
  </div>
  <div class="form-group">            
      <label for="name" id="nameLabel" class="changeLanguages col-sm-2">Nombre:</label>
      <div class="col-sm-10"><input type="text" name="nombre" id="name" placeholder="Nombre de Usuario" class="form-control changeLanguages"/> </div>         
  </div>
  <div class="form-group">            
      <label for="apellido" id="apellidoLabel" class="col-sm-2 changeLanguages">Apellido:</label>
      <div class="col-sm-10"><input type="text" name="apellido" id="apellido" placeholder="Nombre de Usuario" class="form-control changeLanguages"/>  </div>           
  </div>
  <div class="form-group">            
      <label for="tipo" id="tipoLabel" class="col-sm-2 changeLanguages">Tipo de Usuario:</label>
      <div class="col-sm-10">
        <select name="tipoUsuario" id="tipo" placeholder="Tipo de Usuario" class="form-control changeLanguages"/>    
          <option value="1" id="optTpoUser1" class="changeLanguages">Usuario</option>
          <option value="2" id="optTpoUser2" class="changeLanguages">Editor</option>
          <option value="3" id="optTpoUser3" class="changeLanguages">Adminstrador</option>
          <option value="4" id="optTpoUser4" class="changeLanguages">Super Administrador</option>
        </select> 
      </div>        
  </div>
  <div class="form-group">            
      <label for="userName" id="usernameLabel" class="col-sm-2 changeLanguages">Nombre Usuario:</label>
      <div class="col-sm-10"><input type="text" name="userName" id="username" placeholder="Nombre de Usuario" class="form-control changeLanguages"/>      </div>       
  </div>
  <div class="form-group">            
      <label for="password" id="passwordLabel" class="col-sm-2 changeLanguages">Contraseña:</label>
      <div class="col-sm-10"><input type="password" name="password" id="password" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
  </div>
  <div class="form-group">            
      <label for="password2" id="password2Label" class="col-sm-2 changeLanguages">Repita la Contraseña:</label>
      <div class="col-sm-10"><input type="password" name="password2" id="password2" placeholder="Contraseña" class="form-control changeLanguages"/>  </div>           
  </div>
  <div class="form-group">            
      <label for="email" id="emailLabel" class="col-sm-2 changeLanguages">Correo Electrónico:</label>
      <div class="col-sm-10"><input type="text" name="email" id="email" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
  </div>
  <div class="form-group">            
      <label for="telFijo" id="telFijoLabel" class="col-sm-2 changeLanguages">Téléfono Fijo:</label>
      <div class="col-sm-10"><input type="text" name="telFijo" id="telFijo" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
  </div>
  <div class="form-group">            
      <label for="telMovil" id="telMovilLabel" class="col-sm-2 changeLanguages">Teléfono Movil:</label>
      <div class="col-sm-10"><input type="text" name="telMovil" id="telMovil" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
  </div>
  <div class="form-group">            
      <label for="text" id="estadoLabel" class="col-sm-2 changeLanguages">Estado:</label>
      <div class="col-sm-10">
        <select name="estado" id="estado" class="form-control changeLanguages"/>   
          <option value="1" id="optState1" class="changeLanguages">En espera</option>                  
          <option value="2" id="optState2" class="changeLanguages">Inactivo</option>
          <option value="3" id="optState3" class="changeLanguages">Suspendido</option>
          <option value="4" id="optState4" class="changeLanguages">Bloqueado</option>
          <option value="5" id="optState5" class="changeLanguages">Cambio de Contraseña</option>
          <option value="6" id="optState6" class="changeLanguages">Activo</option>
        </select>   
      </div>       
  </div>
  <div class="col-sm-12">        
      <input type="hidden" name="event" id="event" value='' class="form-control"/>
      <input type="submit" value="Crear Usuario" id="btnCrear" class="btn btn-primary pull-right changeLanguages" />     
  </div>
</form>
<br><br>