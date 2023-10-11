<?php include 'includes/head.php'; ?>    
    <body id="page-top">

    <?php include 'includes/menu.php'; ?>    


        <div id="sliderhome" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#sliderhome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#sliderhome" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#sliderhome" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/intro1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/intro2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/intro3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#sliderhome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#sliderhome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-4">Hernán Darío Cadavid Márquez</h2>

                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-6 ms-auto"><p class="lead text-justify p-3">Ciudadano Colombiano
Representante a la Cámara por Antioquia 2022-2026
Por el Partido Centro Democrático
Comisiones Constitucionales: Primera 
Comisión Legal: Investigación y de Acusaciones 
.</p></div>
                    <div class="col-lg-6 me-auto"><p class="lead text-justify p-3">Somos grupo de más de 56 mil antioqueños que compartimos la misma visión de país; promoviendo la defensa de la democracia, la institucionalidad y la justicia como los pilares que mantienen nuestra nación en orden.</p></div>
                </div>

            </div>
        </section>

        <section class="page-section" id="dejanos_opinion_home">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm2">                            
                            <div class="text-center mb-3">
                                <img src="assets/img/incognito.png" alt="">
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="Ingresa tu correo electrónico"/>
                                <label for="phone">Correo electrónico</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                            </div>

                            <div class="mb-5">
                                <div class="form-check checkbox-lg">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    En cumplimiento de las disposiciones de la Ley 1581 de 2012 y del Decreto reglamentario 1377 de 2013 que desarrollan el derecho de habeas data, solicitamos su autorización para en calidad de Responsable del Tratamiento pueda recopilar, almacenar, archivar, copiar, analizar, usar y consultar los datos que se señalan a continuación. Estos datos serán recolectados por lo siguientes finalidades, todas relacionados con las actividades.
                                  </label>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-xl " id="enviarOpinion" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
