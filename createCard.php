<?php 
function createCard ($get_posts){
    foreach($get_posts as $get_post){
        $id = $get_post['id'];
        $name = $get_post['name'];
        $image = $get_post['image'];
        $description = $get_post['description'];
        $oferta = $get_post['oferta'];
        $link = $get_post['link'];
        $gategory = $get_post['category'];
        //concatenando Titulo, detalhes do carro e texto jurídico.
        echo "<div class='card' id='$id' data-category='$gategory'>
        <img  src='$image'>
        <h3>$name</h3>
        <p>$description</p>
        <span><strong>$oferta</strong></span>
        <div class='card-btn'>
            <a href=$link>Quero!</a>
        </div>
        </div>";
    }
};

?>