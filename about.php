<?php

// Configurações globais
require_once ('_config.php');





/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Página Modelo';

// CSS da página
$T['pageCSS'] = '/css/template.css';

// JavaScript da página
$T['pageJS'] = '/js/template.js';

// Cabeçalho da página
require_once('_header.php');

?>

            <!-- Conteúdo principal -->
            <article>

                <h2>Jogos de Cartas</h2>
                <p>A história dos jogos digitais teve início quando os acadêmicos começaram a projetar jogos simples, 
                    simuladores e programas de inteligência artificial, como parte de suas pesquisas em ciência da computação. 
                    Somente a partir das décadas de 1970 e 1980 é que os jogos eletrônicos se tornaram populares, quando jogos de arcade, console de jogos eletrônicos e jogos de computador foram introduzidos ao público em geral. 
                    Desde então, os jogos eletrônicos tornaram-se uma forma popular de entretenimento 
                    e uma parte da cultura moderna em diversas regiões do mundo.</p>

                <p>Os jogos foram desenvolvidos para ampliar a mente e desenvolver melhor o cérebro nas atividades escolares, 
                    como uma consequência das pesquisas da computação em áreas como a inteligência artificial. 
                    A comercialização do UNIVAC I (considerado o primeiro computador comercial da história) em 1951 abriu caminho para a adoção dos computadores por instituições acadêmicas, 
                    órgãos de pesquisa e empresas em todo o mundo desenvolvido. Devido ao alto custo, 
                    grande consumo de energia e a necessidade de se empregar uma equipe altamente treinada para manter e operar as máquinas, 
                    a tecnologia da computação ficou inicialmente limitada às organizações maiores. 
                    Por conta disso, a criação dos primeiros jogos eletrônicos limitou-se a testes 
                    e demonstrações de teorias relacionadas a áreas como a interação humano-computador, a aprendizagem adaptativa e estratégia militar.
                    Devido à falta da documentação de muitos desses testes, é difícil de se determinar qual teria sido o primeiro jogo eletrônico criado. 
                    Alguns dos primeiros jogos conhecidos incluem Nimrod (1951), uma máquina feita sob encomenda pela Ferranti para o Festival da Grã-Bretanha e na qual se poderia jogar o jogo matemático Nim; OXO (1952), 
                    criado por Alexander S. Douglas para o computador EDSAC e que simulava o jogo da velha; e Hutspiel (1955), um jogo de guerra construído pelo exército dos Estados Unidos para simular um conflito com a União Soviética na Europa.</p>
                <img src="https://picsum.photos/400/300" class="flush" alt="Imagem aleatória">
                <p>Na década de 1960, o Instituto de Tecnologia de Massachusetts era um dos principais centros de pesquisa na área da computação no mundo e dispunha do TX-0, um computador dotado de transistores, ao invés de válvulas, 
                    e que era menor que os mainframes padrão da época.</p>
                <h4>Links</h4>
                <ul>
                    <li><a href="http://luferat.net">Site do Fessô</a></li>
                    <li><a href="https://github.com/luferat">GitHub do Fessô</a></li>
                </ul>
                <p>Como dito acima sobre os jogos, eles não são apenas para diversão, mas sim melhorama opinião lógica. </p>

            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>Barra lateral</h3>
                <p>Em 1966, o engenheiro Ralph Baer foi incumbido de criar a melhor televisão do mundo. 
                    Ele pensava em criar uma TV interativa com jogos, mas a ideia não vingou. 
                    Anos mais tarde, em 1971, a Magnavox compra o projeto de Baer, da Sanders Associates, e começa a desenvolver o Odyssey 100, 
                   o primeiro videogame para ser conectado à TV.</p>
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
