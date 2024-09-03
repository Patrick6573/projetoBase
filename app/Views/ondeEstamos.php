<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
<!-- main -->
<section class="container product-box py-5">
    <div class="row">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/ambiente.png') ?>" >
        </div>
        <div class="col-6">
            <p class="where-we-are-title mb-0">Ara Cursos</p>
            <p class="where-we-are-subtitle">Rua das Araras, n° 129</p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam nulla distinctio iusto ducimus dicta quaerat consequuntur repellendus vero aliquam deleniti, sapiente, cum nisi unde, numquam excepturi nobis atque magnam.
            </p>

            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="tel:+33123456789">+55 3398562123</a>
                </p>
            </div>

            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="mailto:araCursos@gmail.com">araCursos@gmail.com</a>
                </p>
            </div>

        </div>
    </div>
</section>


<!-- map -->
<section class="container product-box py-5">
    <div class="row">
        <div class="col text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.600250068986!2d-42.03893782484712!3d-16.848042683950112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x74d190703414ed5%3A0xcf7aa0956da64125!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20do%20Norte%20de%20Minas%20Gerais%20-%20IFNMG%20Campus%20Ara%C3%A7ua%C3%AD!5e1!3m2!1spt-BR!2sbr!4v1724336888683!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<?= $this->endSection() ?>