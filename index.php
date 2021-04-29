<?php

// Configurações globais
require_once ('_config.php');

/***** Lista de artigos *****/

// Obtendo do database
$sql = "
SELECT art_id, art_image, art_title, art_intro 
FROM articles
WHERE art_status = 'ativo' AND art_date <= NOW()
ORDER BY art_date DESC;
";
$res = $conn->query($sql);

// Prepara a 'view' dos artigos
$articles = '';

// Obtém uma linha por vez
while($art = $res->fetch_assoc()):

    $articles .= <<<HTML

<div class="article" data-link="/view.php?{$art['art_id']}">
    <img src="{$art['art_image']}" alt="{$art['art_title']}">
    <div>
        <h4>{$art['art_title']}</h4>
        <small>{$art['art_intro']}</small>
    </div>
</div>

HTML;

endwhile;

/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Intranet';

// CSS da página
$T['pageCSS'] = '/css/index.css';

// JavaScript da página
$T['pageJS'] = '/js/index.js';

// Cabeçalho da página
require_once('_header.php');

?>

<!-- Conteúdo principal -->
<article>

    <h2>Artigos Recentes</h2>
    <small>Mais novos primeiro.</small>
    <?php echo $articles ?>    

</article>

<!-- Barra lateral -->
<aside>
    <h3>Barra lateral</h3>
    <p>Na década de 1960, o Instituto de Tecnologia de Massachusetts era um dos principais centros de pesquisa na área da computação no mundo e dispunha do TX-0, 
       um computador dotado de transistores, ao invés de válvulas, 
       e que era menor que os mainframes padrão da época. </p>
    <ul>
        <li><a href="/">Link 1</a></li>
        <li><a href="/">Link 2</a></li>
        <li><a href="/">Link 3</a></li>
        <li><a href="/">Link 4</a></li>
    </ul>
</aside>

<?php

// Rodapé da página
require_once ('_footer.php');
