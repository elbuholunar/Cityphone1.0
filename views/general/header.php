

<?php if ($head == 1): ?>
  

<nav class="navbar navbar-default size-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VirtualPhone</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" > <font id="about" class="changeLanguages">quien</font> <span class="sr-only">(current)</span></a></li>
        <li><a href="#" ><font id="ContactUs" class="changeLanguages">Contacto</font></a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li-->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control changeLanguages" placeholder="Search" id="search">
        </div>
        <input type="submit" class="btn btn-default changeLanguages" id="buttonSearch" value="Buscar">
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/Spain.png" class="btn-languages2" alt="es"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/Spain.png" class="btn-languages" alt="es-es"></a></li>
            <li><a href="#" class="linkLan"><img src="../../resources/images/Colombia.png" class="btn-languages" alt="es-co"></a></li>
          </ul>
        </li>  
        
        <li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/Usa.png" class="btn-languages2" alt="en"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/Usa.png" class="btn-languages" alt="en-us"></a></li>
            <li><a href="#" class="linkLan"><img src="../../resources/images/Britain.png" class="btn-languages" alt="en-br"></a></li>
          </ul>
        </li> 
         
        <li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/France.png" class="btn-languages2" alt="fr"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/France.png" class="btn-languages" alt="fr"></a></li>            
          </ul>
        </li>
        <li><a href="../users/login.php" id="sesion" class="changeLanguages"><font id="sesion" class="changeLanguages">Link</font></a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  ><font id="Configurations" class="changeLanguages">Dropdown</font> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" ><font id="createUser" class="changeLanguages" >Action</font></a></li>
            <li><a href="#" ><font id="updateUser" class="changeLanguages" >Another action</font></a></li>
            <li><a href="#"><font  id="showUsers" class="changeLanguages" >Something else here</font></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" ><font id="deleteUser" class="changeLanguages" >Separated link</font></a></li>
          </ul>
        </li-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header>
	<div class="header">
		<div class="titutlo shadow-text">
			<h1><font id="title" class="changeLanguages">SISTEMA DE CITOFONIA VIRTUAL</font></h1>
			<h3><font id="subtitle" class="changeLanguages">Con el Respaldo de Estecnología</font></h3>
		</div>
		<div class="logo">
			<img src="../../resources/images/logovp.png">
		</div>		
	</div>
</header>
<div class="general-content">
</div>


<?php elseif ($head == 2): ?>
  
<nav class="navbar navbar-default size-default">
  <div class="container-fluid">
    
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VirtualPhone</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" > <font id="about" class="changeLanguages">quien</font> <span class="sr-only">(current)</span></a></li>
        <li><a href="#" ><font id="ContactUs" class="changeLanguages">Contacto</font></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control changeLanguages" placeholder="Search" id="search">
        </div>
        <input type="submit" class="btn btn-default changeLanguages" id="buttonSearch" value="Buscar">
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/Spain.png" class="btn-languages2" alt="es"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/Spain.png" class="btn-languages" alt="es-es"></a></li>
            <li><a href="#" class="linkLan"><img src="../../resources/images/Colombia.png" class="btn-languages" alt="es-co"></a></li>
          </ul>
        </li>  
        
        <li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/Usa.png" class="btn-languages2" alt="en"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/Usa.png" class="btn-languages" alt="en-us"></a></li>
            <li><a href="#" class="linkLan"><img src="../../resources/images/Britain.png" class="btn-languages" alt="en-br"></a></li>
          </ul>
        </li> 
         
        <li class="dropdown">         
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../resources/images/France.png" class="btn-languages2" alt="fr"></a>
          <ul class="dropdown-menu dropdownLan">            
            <li><a href="#" class="linkLan"><img src="../../resources/images/France.png" class="btn-languages" alt="fr"></a></li>            
          </ul>
        </li>
        <li><a href="../general/header.php" ><font id="logOut" class="changeLanguages">Link</font></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  ><font id="Configurations" class="changeLanguages">Dropdown</font> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="javaScript:objActAdmon.createUser()"><font id="createUser" class="changeLanguages">Action</font></a></li>
            <li><a href="javaScript:void(0)"><font id="showUsers" class="changeLanguages">Something else here</font></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="javaScript:void(0)"><font id="configsUsers" class="changeLanguages">Separated link</font></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div class="header">
    <div class="titutlo shadow-text">
      <h1><font id="title" class="changeLanguages">SISTEMA DE CITOFONIA VIRTUAL</font></h1>
      <h3><font id="subtitle" class="changeLanguages">Con el Respaldo de Estecnología</font></h3>
    </div>
    <div class="logo">
      <img src="../../resources/images/logovp.png">
    </div>    
  </div>
</header>


<?php elseif ($head == 3): ?>




<?php endif ?>