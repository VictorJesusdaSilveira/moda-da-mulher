<?php require __DIR__ . "/header.php"; ?>

<main class="produto">
    <div class="container">
        <nav class="mt-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Listrada</li>
            </ol>
        </nav>

        <!-- Imagem e Descrição -->
        <div class="row">
            <div class="col-md-7">
                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" alt="">
            </div>
            <div class="col-md-5">
                <h1>Camiseta de Manga Comprida</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quo ipsum magnam quasi cupiditate laborum asperiores voluptate accusamus nostrum, iure doloribus in deleniti sint sequi. Libero voluptates exercitationem dolor consectetur!</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <h5 class="preco mt-3">R$ 79,90</h5>
                <span>Em até 12x sem Juros</span>

                <div class="comprar mt-3">
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Quantidade de Parcelas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                        <button type="submit" class="btn mt-4 w-100 btn-success">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
        <!--/.Imagem e Descrição -->

        <div class="comentarios row">
            <div class="col">
                <div class="fb-comments"
                    data-href="https://www.seusite.com/sua-pagina"
                    data-width="100%"
                    data-numposts="5">
                </div>
            </div>
        </div>
    </div>
</main>



<script async defer crossorigin="anonymous"
src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0" nonce="ABC123">
</script>




<?php require __DIR__ . "/footer.php"; ?>
