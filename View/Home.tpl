{include file="Cabeceras/Header.tpl"}


{if isset ($pagina)}
    {if $pagina=="Login"}
      {include file="Cabeceras/Header.tpl"}
    {/if}



{else}
    {include file="Cabeceras/Inicio.tpl"}
{/if}


{include file="Cabeceras/Footer.tpl"}