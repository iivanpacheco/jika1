<!--Comentario en HTML 
<form role="form">
  <div class="form-group">
    <label for="ejemplo_email_1">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_1"
           placeholder="Introduce tu email">
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1">Contraseña</label>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Contraseña">
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
    <input type="file" id="ejemplo_archivo_1">
    <p class="help-block">Ejemplo de texto de ayuda.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Activa esta casilla
    </label>
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>-->



<!--<form class="form-horizontal">

<fieldset>


<legend>Registr Usuarios</legend>


<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
  <div class="col-md-5">
  <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Apellido">Apellido</label>  
  <div class="col-md-5">
  <input id="Apellido" name="Apellido" type="text" placeholder="Apellido" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Celular">Celular</label>  
  <div class="col-md-5">
  <input id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control input-md">
    
  </div>
</div>

Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="Departamento">Departamento</label>
  <div class="col-md-4">
    <select id="Departamento" name="Departamento" class="form-control">
      <option value="1">Hombre</option>
      <option value="2">Mujer</option>
      <option value="3">otro</option>
    </select>

<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Celular">Celular</label>  
  <div class="col-md-4">
  <input id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Direccion">Direccion</label>  
  <div class="col-md-8">
  <input id="Direccion" name="Direccion" type="text" placeholder="Direccion" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Departamento">Departamento</label>
  <div class="col-md-4">
    <select id="Departamento" name="Departamento" class="form-control">
      <option value="1">Guatemala</option>
      <option value="2">Santa Rosa</option>
      <option value="3">Sacatepéquez</option>
      <option value="4">Jalapa</option>
      <option value="5">Jutiapa</option>
      <option value="6">San Marcos</option>
      <option value="7">Quetzaltenango</option>
      <option value="8">Petén</option>
      <option value="9">Alta Verapaz</option>
      <option value="10">Baja Verapaz</option>
      <option value="11">El Progreso</option>
      <option value="12">Izabal</option>
      <option value="13">Zacapa</option>
      <option value="14">Retalhuleu</option>
      <option value="15">Quiché</option>
      <option value="16">Huehuetenango</option>
      <option value="17">Escuintla</option>
      <option value="18">Chimaltenango</option>
      <option value="19">Chiquimula</option>
      <option value="20">Sololá</option>
      <option value="21">Suchitepéquez</option>
      <option value="22">Totonicapán</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Municipio">Municipio</label>  
  <div class="col-md-4">
  <input id="Municipio" name="Municipio" type="text" placeholder="Municipio" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Registrarse">Registrarse</label>
  <div class="col-md-4">
    <button id="Registrarse" name="Registrarse" class="btn btn-danger">Registrarse</button>
  </div>
</div> -->

<!DOCTYPE html>
<html lang="pt-br">
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Administrador</title>
  </head>
  <body>
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Registro do Professor</h1>
                    <hr />
                  </div>
              </div> 
        <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="#">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Nome do Professor</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Digite o nome do Professor."/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Email do professor</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Digite o email do Professor."/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Nome de Usuario</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Digite o nome."/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Senha</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Digite a senha."/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirmação da senha</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirme a senha."/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="button" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
            </div>
          
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </body>
</html>