<?php include 'includes/head.php'; ?>    
    <body id="page-top">

    <?php include 'includes/menu.php'; ?>    
        <div class="container-fluid page-title5 mb-5 star-top">
            <div class="container relative">
                <h2 class="display-5 mb-4 ">Déjanos tu opinión</h2>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="contacto.php">Contacto</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="page-section" id="dejanos_opinion">
            <img src="assets/img/incognito.png" alt="" class="incognito">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <form id="contactForm">

                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Ingresa tu nombre completo" />
                                <label for="name">Nombre completo</label>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Selecciona el Departamento</option>
                                        <option value="1">Uno</option>
                                        <option value="2">Dos</option>
                                        <option value="3">Tres</option>
                                      </select>
                                      <label for="floatingSelect">Departamento</label>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Selecciona la Ciudad</option>
                                        <option value="1">Uno</option>
                                        <option value="2">Dos</option>
                                        <option value="3">Tres</option>
                                      </select>
                                      <label for="floatingSelect">Ciudad</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="Ingresa tu correo electrónico"/>
                                <label for="phone">Correo electrónico</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="celular" type="number" placeholder="Ingresa tu número de contacto"/>
                                <label for="phone">Número de contacto</label>
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
