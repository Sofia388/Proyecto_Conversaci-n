{include file="Cabeceras/Header.tpl"}

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Regreso">Regresar</a></li>
        <li><a href="?controller=User&method=IrRegistro">Registro</a></li>
      </ul>
    </div>
  </nav>


<div>
    <h1 align="center">Login</h1>
</div>
    <div class="row">
    <form  method="post" action="?controller=User&method=BuscarUsuario" class="col s12">

    <div class="row" >
        <div class="input-field col s6 s2 row offset-s2 center aling" >
          <input id="Depto_idDepto" type="text" class="validate" name="Depto_idDepto" required=""/>
          <label for="Depto_idDepto">ID Departamento</label>
        </div>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s6 row offset-s2 center aling">
             <input id="Contrasena" type="Contrasena" class="validate" name="Contrasena" required=""/>
             <label for="Contrasena">Contraseña</label>
            </div>
      </div>

      <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div>