{include file="Cabeceras/Header.tpl"}
{if isset ($pagina)}
        <li><a href="/Cabeceras/Inicio.tpl">Regresar</a></li>
 
    {if $pagina=="Bienvenida"}
      {include file="Bienvenida.tpl"}
    {/if}

{else}
    {include file="Login.tpl"}
{/if}



{include file="Cabeceras/Footer.tpl"}



