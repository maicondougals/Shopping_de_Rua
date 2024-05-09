<?php
include 'function.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shopping de Rua</title>
</head>
<body>
    <section class="info1">
        <div>
            <span>Esquenta dia das mãe, prepare-se para uma explosão de promoções </span>
            <span>Ofertas exclusivas</span>
            <span>Ofertas com tempo limitado</span>
        </div>
    </section>
    <nav>
        <button id="btn-categoria" ><p>Categorias <i class="fa-solid fa-bars"> </i></p></button>
      
    </nav>
   
    <section class="categoria" id="categoriaa">
        <ul>
            <li><a class="categorias" href="">Todos </a></li>
             <li><a class="categorias" onclick="filterCategory('mercado')" > Mercado <i class="fa-solid fa-cart-shopping"></a></i></li>
            <li><a class="categorias" onclick="filterCategory('bebidas')" >Loja de Bebidas <i class="fa-solid fa-wine-bottle"></i></a></li>
            <li><a class="categorias" onclick="filterCategory('lar')" >Utilidades do Lar <i class="fa-solid fa-house"></i></a></li>
            <li><a class="categorias" onclick="filterCategory('farmacia')" >Farmácia <i class="fa-solid fa-pills"></i></a></li>
            <li><a class="categorias" onclick="filterCategory('panificadora')" >Panificadora <i class="fa-solid fa-mug-saucer"></i></a></li>
            <li><a class="categorias" onclick="filterCategory('informatica')">Informática <i class="fa-solid fa-display"></i></a></li>
            <li><a class="categorias" onclick="filterCategory('empresarial')">Empresarial <i class="fa-solid fa-user-tie"></i></i></a></li>
        </ul>
    </section>

    <header>
      
    </header>

    
  
    <section class="info2">
        
    </section>

    <div id="carouselExampleDark" class="carousel carousel-white slide" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000" >
            <img src="https://casavalente.com.br/wp-content/uploads/2021/01/ofertas-e-promocoes.png"class="d-block w-auto  mx-auto" height="400px"  alt="...">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://assets-global.website-files.com/603001e2efe81183e32bc297/6225316b7e7fc1aaed8f632c_Mockup-Capa-bySelbetti-500px-Sinalizacao-de-Precos-e-Promocoes.png" class="d-block w-auto  mx-auto" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images-americanas.b2w.io/spacey/acom/2024/04/19/4-648x324-destaque-mobile-b280d15afd01.png"  class="d-block w-auto  mx-auto" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <input id="busca" type="text" placeholder="Buscar Loja">
    
    <div class="container" id="container">
        <?php 
        createCard ($get_posts);

        ?>
    </div>


    <footer>
        <div class="sobre">
            <div>
                <p>Todos os direitos reservados por <a href="">51Top  </a></p> <img src="/images/favicon.ico" alt="">
            </div>
        
            <div>
                <p>Poduzido por <a href="">Studios Maicon Douglas  </a></p> <img src="/images/Studio Maicon Douglas..png" alt="">
            </div>
            
            <p>Email <a href=""> gerenciamento51top@gmail.com </a></p>
            <p>Telefone <a href="https://api.whatsapp.com/send/?phone=5561998049807&text=Olá%21+Tenho+interesse+em+saber+mais+da+51top.&type=phone_number&app_absent=0">(61) 9 9804-4807 |</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>

    
        document.querySelector('#btn-categoria').addEventListener('click', function(){

            document.querySelector(".categoria").classList.toggle('categoriaClick')
           
        })

        document.getElementById('busca').addEventListener('input', function(){
            var searchText = this.value.toLowerCase();
            var cards = document.querySelectorAll('.card')

            cards.forEach(function(card){
                var text = card.textContent.toLowerCase();
            if (text.includes(searchText)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }

            })
                
 

        });
        
        
  
        function filterCategory(category) {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        if (card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
    
}
    </script>
</body>
</html>
