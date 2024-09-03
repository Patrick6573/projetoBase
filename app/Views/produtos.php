<?=$this->extend('main_layout')?>
<?=$this->section('content')?>
<section class="container">
    

    <div class="col">    
        <div class="row mb-5 curso-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="recursos/imagens/1.png" alt="">
            </div>
            <div class='col-7 p-5'>
                <h1 class='mb-3 curso-color'> Curso 01</h1>
                <p class="mb-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia earum recusandae eligendi, nostrum porro eos, vel eius sint quis rem, odit voluptates id maiores enim. A saepe nostrum error necessitatibus!
                </p>
                <h2 class="mt-3 curso-color"> R$ 159.90 </h2>
            </div>

        </div> 
        <!-- Curso 2-->
        <div class="row mb-5 curso-box">

            <div class='col-7 p-5'>
                <h1 class='mb-3 curso-color'> Curso 02</h1>
                <p class="mb-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia earum recusandae eligendi, nostrum porro eos, vel eius sint quis rem, odit voluptates id maiores enim. A saepe nostrum error necessitatibus!
                </p>
                <h2 class="mt-3 curso-color"> R$ 159.90 </h2>
            </div>
            <div class="col-5 text-center">
                <img class="img-fluid" src="recursos/imagens/2.png" alt="">
            </div>

        </div>
    </div>
</section>
<?=$this->endSection()?>