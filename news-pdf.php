<?php
//include library
require_once('dompdf/autoload.inc.php');

//reference the Dompdf and Options namespaces
use Dompdf\Dompdf;
use Dompdf\Options;

//instantiate dompdf class
$dompdf = new Dompdf();

//support for JS
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);

//HTML content
$html = '<!DOCTYPE html>
<html lang="en">
<title>Gaming Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">

    <div class="w3-twothird">
      
      <h1>O lançamento distópico de Cyberpunk 2077</h1>

      <p class="w3-text-grey" text-align="justify" text-justify="inter-word">Um dos videojogos mais esperados e importantes de 2020 chegou ao mercado e ergueu-se um coro de vozes críticas e descontentes. A CD Projekt Red tem em 2021 um ano para recuperar a sua reputação enquanto lida com uma comunidade desconfiada.
      Cyberpunk 2077 despertou a curiosidade e a imaginação dos jogadores muito antes de chegar ao mercado. Era uma das obras mais aguardadas em 2020 e será inequivocamente um dos títulos associados ao ano transacto. Infelizmente para a produtora CD Projekt Red (e para a comunidade de jogadores que esperou e desesperou pelo jogo), os motivos de tamanho destaque no pós-lançamento estão longe de serem homogéneos. 

      A aventura Role Playing Game que coloca o jogador na pele de V transporta-nos para Night City, metrópole que prometia liberdade para a exploração e um coração a bater em tons de néon. O entusiasmo era arrebatador, mesmo depois de o lançamento ter sido adiado diversas vezes — primeiro de Abril de 2020 para Setembro, depois para Novembro e, finalmente, em Outubro acabaria por ser adiado para o dia 10 de Dezembro. 

      Quando chegou ao mercado, Cyberpunk 2077 ficou disponível no PC, PlayStation 4, Stadia e Xbox One — as consolas da Sony e da Microsoft estão disponíveis em duas variantes: a PlayStation 4 e a PlayStation 4 Pro, a Xbox One e a Xbox One X, respectivamente; os modelos Pro e X têm mais capacidade tecnológica, sendo versões melhoradas dos modelos que chegaram originalmente ao mercado.

      Há relatos de erros sérios e momentos caricatos protagonizados pela obra da CD Projekt Red em todas as plataformas, mas é precisamente nos modelos originais das consolas que os jogadores estão a encontrar uma experiência de jogo bem diferente do que foi prometido — e mostrado — pela casa polaca. Aliás, o volume de queixas e o tom do descontentamento foi tal que a Sony e a Microsoft tiveram que reagir à situação.</p>
      <a href="https://www.publico.pt/2021/01/08/tecnologia/noticia/lancamento-distopico-cyberpunk-2077-1945521">Noticia</a>

    

   
    </div>

   
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">

    <div class="w3-twothird">
      <h1>Gran Turismo 7 seguirá jogos clássicos da série</h1>
      <h5 class="w3-padding-32">O jogo será lançado na PlayStation 5 ainda não tem data de lançamento confirmado.
</h5>

      <p class="w3-text-grey" text-align="justify" text-justify="inter-word">O produtor responsável pelo desenvolvimento de ‘Gran Turismo 7’, Kazunori Yamauchi, afirmou em entrevista ao Octane Japan (via GT Planet) que o próximo título seguirá o molde dos jogos clássicos da série, desde o original até ‘Gran Turismo 4’. “Cresci enquanto entusiasta por automóveis rodeado pela influência das fabricantes japonesas de automóveis e pela transmissão da media automóvel e esse também é o incentivo da minha produção. Apesar de ser um título que tem sido jogado em todo o mundo, nunca me esqueci que [‘Gran Turismo’] teve origem no Japão e agora sinto a responsabilidade e missão de herdar a cultura automóvel japonesa”, afirmou Yamauchi. Ainda que ‘Gran Turismo 7’ não tenha data de lançamento, acredita-se que o simulador de corridas automóveis chegará à PlayStation 5 ainda em 2021.</p>
      <a href="https://www.noticiasaominuto.com/tech/1679615/gran-turismo-7-seguira-jogos-classicos-da-serie">Notícia</a>

    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Fábio Oliveira a40113 / Rodrigo Alexandre a40458 </h1>
</div>';

//load HTML content
$dompdf->loadHtml($html);

//setup paper size
$dompdf->setPaper('A4', 'landscape');

//render HTML as PDF
$dompdf->render();

//output PDF
$dompdf->stream("gaming_blog", array("Attachment" => 0));

?>