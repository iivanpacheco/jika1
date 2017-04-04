 

 <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

 <div align="center">
<form method="POST" action="/auth/register">
    <p>{!! csrf_field() !!}
    </p>
    <table width="538" height="183" border="0" align="center">
      <tr>
        <td><div class="form-group">
  <label class="col-md-6 control-label">Nombre</label>  
  <div class="col-md-6 inputGroupContainer">
  </div>
</div>
   </td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="name" value="{{ old('name') }}">
    </div></td>
      </tr>
      <tr>
        <td> <div class="form-group">
  <label class="col-md-6 control-label">Correo</label>  
  <div class="col-md-6 inputGroupContainer">
   </div>
    </div>
</td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="email" name="email" value="{{ old('email') }}">
    </div></td>
      </tr>
      <tr>
        <td> <div class="form-group">
  <label class="col-md-6 control-label">Contraseña</label>  
  <div class="col-md-6 inputGroupContainer">
  
  </div>
</div></td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
  <input type="password" name="password">
    </div></td>
      </tr>
      <tr>
        <td> <div class="form-group">
  <label class="col-md-6 control-label">Confirmar Contraseña</label>  
  <div class="col-md-6 inputGroupContainer">
  
  </div>
</div></td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
  <input type="password" name="password_confirmation">
    </div></td>
      </tr>
      <tr>
        <td colspan="2">
         <div align="center">
        <button type="submit">Register</button>
    </div></td>
      </tr>
      <tr>
    
      </tr>
    </table>   
      <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

</form>
</div>