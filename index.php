<?php
header('Content-Type: text/html; charset=utf-8');

$imgs = array(
  'img/aline.jpg',
  'img/jesus.jpg',
  'img/alf.jpg',
  'img/dieguez.jpg',
  'img/golias.jpg',
  'img/sapo.jpg',
  'img/stella.jpg',
  'img/fatala.jpg'
);

$textos = array(
  'Depois que conheci a Drogolias minha alimentação melhorou e hoje só repito o almoço 3 vezes. Meu corpo e meu cabelo mudaram, não preciso mais de chapinha.',
  'Eu multipliquei pães e peixes, mas a Drogolias multiplicou meus músculos e minha autoestima. Amém, irmãos?',
  'A Drogolias complementa minha dieta orgânica. Meu produto preferido é o Muffin de Whey. Perdi todos meus cabelos, mas o importante é que ganhei músculos.',
  'Tomei e injetei todos os remédios receitados pela Drogolias e obtive um resultado impressionante em 2 semanas.',
  'Meu nome é Bruno Barbosa da Silva Cortopassi, tenho 14 anos, sou aqui de Santos e tô jogando com a Alemanha.',
  'Perdi 80kg em 4 semanas graças a Drogolias. Melhorei minha autoestima, é como se eu tivesse voltado no tempo e fosse um jovem novamente.',
  'Graças aos remédios da Drogolias consegui mudar de sexo em poucas semanas, além disso, meu tríceps obteve um crescimento incrível.',
  'Eu era um estagiário frango e hoje, após 3 semanas utilizando os remédios da Drogolias estou a frente de uma grande equipe.'
);

$periodos = array(
  '3 semanas',
  '4 semanas',
  '5 semanas',
  '2 semanas',
  '3 semanas',
  '4 semanas',
  '9 semanas',
  '3 semanas'
);

$autores = array(
  'Aline, São Paulo-SP',
  'Jesus, Belém-PA',
  'Leandro, Santos-SP',
  'Rodrigo, Agudos-SP',
  'Bruno, Santos-SP',
  'Gabriel, São Paulo-SP',
  'Stella, São Paulo-SP',
  'Fatala, São Paulo-SP'
);

$array = array(0, 1, 2, 3, 4, 5, 6);
shuffle($array);

$banners = array();
$banners[0] = 7;
$banners[1] = array_pop($array);
$banners[2] = array_pop($array);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Drogolias - Vem ser bolado!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<!-- <script type="text/javascript" src="js/boxOver.js"></script> -->
<script>
function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>
<body onload="MM_preloadImages('img/jaja.png', 'img/jaja2.png')">
<div id="main_container">
  <div id="header">
    <div class="top_right">
      <div class="languages">
        <div class="lang_text">Idiomas:</div>
        <a href="#" class="lang"><img src="img/br.jpg" alt="" border="0" /></a> <a href="#" class="lang"><img src="img/ch.png" alt="" border="0" /></a>
      </div>
      <div class="big_banner">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Drogolias - Topo -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:600px;height:80px"
             data-ad-client="ca-pub-6268201630210149"
             data-ad-slot="2263387778"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

      </div>
    </div>
    <div id="logo">
      <a href="#"><img src="img/logo.png" alt="" border="0" width="357" height="133" /></a>
    </div>
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="#" class="nav"> Home </a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav">Produtos</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav">Televendas</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav">Exame Médico</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav">Minha Conta</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav">Contato</a></li>
      </ul>
    </div>
    <!-- end of menu tab -->

    <div class="promo">
      <p class='bold' style='font-size: 50px'>PROMOÇÃO #BOLADONA</p>
      <p style='font-size: 18px'>Na compra de <span class='bold'>1 KY + 1 Hemovirtus</span>, ganhe um <span class='bold'>exame médico!</span></p>
      <p class='bold' style='font-size: 16px'>MAS É SÓ AMANHÃ</p>
    </div>

    <div class="left_content">
      <div class="title_box">Categorias</div>
      <ul class="left_menu">
        <li class="odd"><a href="#">Anabolizantes (Humano)</a></li>
        <li class="even"><a href="#">Anabolizantes (Cavalo)</a></li>
        <li class="odd"><a href="#">Emagrecimento</a></li>
        <li class="even"><a href="#">Injeções</a></li>
        <li class="odd"><a href="#">Pílulas</a></li>
        <li class="even"><a href="#">Receitas Médicas</a></li>
        <li class="odd"><a href="#">Remédios</a></li>
        <li class="even"><a href="#">Resistência</a></li>
        <li class="odd"><a href="#">Suplementos</a></li>
        <li class="even"><a href="#">Shakes</a></li>
        <li class="odd"><a href="#">Vitaminas</a></li>        
      </ul>
      <div class="title_box">Saúde</div>
      <div class="border_box">
        <div class="product_title"><a href="#">Exame Médico</a></div>
        <div class="product_img"><a href="#"><img src="img/exame_medico.jpg" alt="" border="0" /></a></div>
        <div class="prod_price" style="text-align: justify; width: 165px; margin: 0 auto">
          Obtenha seu exame médico na Drogolias sem burocracia para qualquer atividade física, como
          academia, piscina, gravidez, licença no trabalho, etc.
        </div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box" style="margin-bottom: 60px">
        <input type="text" name="newsletter" class="newsletter_input" value="seu email"/>
        <a href="#" class="join">inscrever</a>
      </div>

      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Drogolias - Left -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:180px;height:200px"
           data-ad-client="ca-pub-6268201630210149"
           data-ad-slot="2123786978"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="oferta"> <img src="img/oferta.png" border="0" class="oferta_img" alt="" />
        <div class="oferta_details">
          <div class="oferta_title">Tivugon Bolator Animal Plus</div>
          <div class="oferta_text">
            Chegou a hora de ficar bolado de verdade com este incrível lançamento da Drogolias.
            Com essa solução inovadora, você começa a perceber o crescimento de músculos a partir de 2 semanas.
            Não perca esta oportunidade e experimente já!
          </div>
          <a href="#" class="prod_buy">Detalhes</a> </div>
      </div>
      <div class="center_title_bar">Produtos Recomendados</div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Whey Gold Chocolate</a></div>
          <div class="product_img"><a href="#"><img src="img/p1.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 200,00</span> <span class="price">R$ 80,99</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Metocarbamol for Horse</a></div>
          <div class="product_img"><a href="#"><img src="img/p5.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 145,50</span> <span class="price">R$ 27,90</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Viagra 100mg</a></div>
          <div class="product_img"><a href="#"><img src="img/p3.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 80,40</span> <span class="price">R$ 15,00</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Shake - Luciana Gimenez</a></div>
          <div class="product_img"><a href="#"><img src="img/p8.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 30,50</span> <span class="price">R$ 12,90</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Isolate Crea Protein 900g</a></div>
          <div class="product_img"><a href="#"><img src="img/p7.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 49,00</span> <span class="price">R$ 28,50</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Ovo em pó</a></div>
          <div class="product_img"><a href="#"><img src="img/p12.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 8,00</span> <span class="price">R$ 3,50</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Hemovirtus</a></div>
          <div class="product_img"><a href="#"><img src="img/p13.png" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 104,00</span> <span class="price">R$ 87,50</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Batata Doce</a></div>
          <div class="product_img"><a href="#"><img src="img/p6.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 6,00</span> <span class="price">R$ 2,20</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Frango</a></div>
          <div class="product_img"><a href="#"><img src="img/p9.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 18,90</span> <span class="price">R$ 7,30</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="center_title_bar">Produtos Mais Vendidos</div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Ternelac</a></div>
          <div class="product_img"><a href="#"><img src="img/p10.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 90,10</span> <span class="price">R$ 34,00</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Power Protein Bar</a></div>
          <div class="product_img"><a href="#"><img src="img/p2.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 3,99</span> <span class="price">R$ 1,50</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#">Gel Lubrificante Íntimo KY</a></div>
          <div class="product_img"><a href="#"><img src="img/p4.jpg" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">R$ 20,00</span> <span class="price">R$ 8,99</span></div>
        </div>
        <div class="prod_details_tab"> <a href="#" class="prod_buy">Comprar</a> <a href="#" class="prod_details">Detalhes</a> </div>
      </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">

      <div class="title_box">Depoimentos</div>

      <? foreach ($banners as $banner) { ?>
        <div class="border_box">
         <div class="product_title"><a href="#">Resultado em <?=$periodos[$banner]?></a></div>
          <div class="product_img"><a href="#"><img src="<?=$imgs[$banner]?>" alt="" border="0" /></a></div>
          <div class="prod_price" style="text-align: justify">
            "<?=$textos[$banner]?>"
            <span style="color: #888888">(<?=$autores[$banner]?>)</span>
          </div>
        </div>
      <? } ?>

      <div class="title_box">Busca</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="palavra-chave"/>
        <a href="#" class="join">procurar</a> </div>
      <div class="shopping_cart" style="margin-bottom: 40px">
        <div class="title_box">Seu carrinho</div>
        <div class="cart_details">0 produto(s)<br />
          <span class="border_cart"></span> Total: <span class="price">R$ 0,0</span> </div>
        <div class="cart_icon"><a href="#"><img src="images/shoppingcart.png" alt="" width="35" height="35" border="0" /></a></div>
      </div>

      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Drogolias - Cantos -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:180px;height:200px"
           data-ad-client="ca-pub-6268201630210149"
           data-ad-slot="2123786978"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"></div>
    <div class="center_footer">
      Drogolias. Todos os direitos reservados.
      <br />
      <br />
      <!-- <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br /> -->
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer">
      <a href="#">home</a> <a href="#">sobre</a> <a href="#">sitemap</a> <a href="#">rss</a> <a href="#">contato</a>
    </div>
  </div>
</div>
<!-- end of main_container -->

<img src="img/jaja.png" style="position:fixed;bottom:0;right:0" width="60" height="60"
onmouseover="this.src='img/jaja2.png'"
onmouseout="this.src='img/jaja.png'">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54595642-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
