{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Registro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controllers=User&method=Regreso">Regresar</a></li>
        <li><a href="?controllers=User&method=IrLogin">Login</a></li>
      </ul>
    </div>
  </nav>
  
  <div>
    <h1 align="center">Registro</h1>
   </div>
      
      <div class="row">
    <form  method="post" action="?controllers=User&method=GuardarUsuario" class="col s12">

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="correo" type="email" class="validate" name="correo" required="">
          <label for="correo">Email</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input  id="nombre" type="text" class="validate" name="nombre" required="">
          <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="apellido" type="text" class="validate" name="apellido" required="">
          <label for="apellido">Apellido</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="Password" type="password" class="validate" name="pass" required="">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 s2 row offset-s2 center aling">
          <input id="dDepto_idDepto" type="text" class="validate" name="dDepto_idDepto" required="">
          <label for="dDepto_idDepto">ID Departamento</label>
          <span class="helper-text" data-error="wrong" data-success="right">Coloca 1- Sala de Ventas o 2- Administracion</span>
        </div>
      </div>



            <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>
  </div>



  
{include file="Cabeceras/Footer.tpl"}