<div class="container-xl py-4">
    <div class="row row-cards">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('dist/img/general/logo-lorena.png') }}" width="300" alt="Lorena" />
                        <h1 class="mt-3">¡Cuéntanos tu experiencia!</h1>
                        <p class="mt-1 fs-3">
                            En Lorena tu experiencia es muy importante, agradecemos que compartas con
                            nosotros para poder servirte mejor.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-12 mt-2">
                            <div class="card card-sm">
                                <a href="{{ url('/buzon?tipo=felicitacion') }}" class="d-block"><img
                                        src="{{ asset('dist/img/general/Felicitacion.jpg') }}" class="card-img-top" alt="Felicitación"></a>
                                <div class="card-body text-center">
                                    <a href="{{ url('/buzon?tipo=felicitacion') }}" class="text-secondary text-decoration-none">
                                        <h2>Felicitación</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mt-2">
                            <div class="card card-sm">
                                <a href="{{ url('/buzon?tipo=queja') }}" class="d-block"><img src="{{ asset('dist/img/general/Queja.jpg') }}"
                                        class="card-img-top" alt="Queja"></a>
                                <div class="card-body text-center">
                                    <a href="{{ url('/buzon?tipo=queja') }}" class="text-secondary text-decoration-none">
                                        <h2>Queja</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mt-2">
                            <div class="card card-sm">
                                <a href="{{ url('/buzon?tipo=comentario') }}" class="d-block"><img
                                        src="{{ asset('dist/img/general/Comentario.jpg') }}" class="card-img-top" alt="Comentario"></a>
                                <div class="card-body text-center">
                                    <a href="{{ url('/buzon?tipo=comentario') }}" class="text-secondary text-decoration-none">
                                        <h2>Comentario</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
