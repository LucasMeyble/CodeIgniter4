<div>{frase}</div>

<hr>

<ul>
  {nomes}
    <li>{nome}</li>
  {/nomes}
</ul>

{if ($admin)}
  vc é admin
{else}
vc não é admin
{endif}

{# comentario em parser #}

<hr>

{noparse}
  aqui é pra o parser nao ser ultilizado {texto}
{/noparse}