<?php 
    $this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
            $this->view('home/menu');
        ?>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Thomas
                <span class="text-primary">Frankliyn</span>
            </h1>
            <div class="subheading mb-5">
                Rau I, 21 . Vitória da Conquista . (77) 585-8468 ·
                <a href="mailto:name@email.com">Thomas@email.com</a>
            </div>
            <p class="lead mb-5">Iniciei meus estudos de na área de informática, aos 13 anos com um curso básico,
                e fiquei fascinado, quando conclui os estudos do ensino médio, fiz um curso técnico no
                IFBA,
                e seis anos depois ingressei na graduação no mesmo IFBA, em Sistemas de Informação,
                que estou cursando e quero muito desenvolver na área de programador.</p>
            <div class="social-icons">
                <a class="social-icon" href="https://github.com/ThomasFrankliyn"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="https://twitter.com/login?lang=pt"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experiencia</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Técnico em Informática</h3>
                    <p>Realizar de maneira eficiente, manutençãos preventivas e corretivas
                        em equipamentos de informática.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Março 2013 - Janeiro 2015</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Assistente Administrativo</h3>
                    <p>Atendimento ao público, organizar e
                        manter auquivos e lidar com planilhas.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Abril 2015 - Setembro 2017</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Desenvolvedor web</h3>
                    <p>desenvolver paginas web, que sejam funcionais e que atendam
                        as nescessidades das empresa.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Julho 2018 - presente</span></div>
            </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Educação</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Colégio Estadual Abdias Menezes</h3>
                    <div class="subheading mb-3">Ensino Médio</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Fevereiro 2007 - Dezembro 2009</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Instituto Federal da Bahia</h3>
                    <div class="subheading mb-3">Técnico em Informática</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Março 2009 - Agosto 2012</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Form-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <?php 
                $this->view('home/form');
            ?>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Certificados</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    Técnico em Informática
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    Programador Web
                </li>
                <li>
        </div>
    </section>
</div>

<?php 
    $this->view('home/rodape');
?>