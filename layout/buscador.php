<section class="position-relative">
        <section id="buscador" class="overflow-hidden">
            <div class="pt-3 pb-4 container position-relative rounded">

                <div class="col-12">
                    <div class="row ">

                        <div class="col-3 form-group">
                            <input placeholder="Código" type="number" class="form-control" id="codigo_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group">
                            <select class="form-control" id="tipo_inmueble_buscar">
                                <option selected default> Tipo de Inmueble </option>
                            </select>
                        </div>

                        <div class="col-3 form-group">
                            <select class="form-control" id="tipo_gestion_buscar">
                                <option selected default> Tipo de Gestión </option>
                            </select>
                        </div>

                        <div class="col-3 form-group">
                            <select class="form-control" id="ciudad_buscar">
                                <option selected default> Ciudad </option>
                            </select>
                        </div>

                        <div class="col-3 form-group">
                            <select class="form-control" id="barrio_buscar">
                                <option selected default> Barrio </option>
                            </select>
                        </div>

                        <div class="col-3 form-group">
                            <input placeholder="Baños" type="number" class="form-control" id="banios_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group">
                            <input placeholder="Alcobas" type="number" class="form-control" id="alcobas_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group">
                            <input placeholder="Garajes " type="number" class="form-control" id="garajes_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group">
                            <p> Precio: </p>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <div class="col-3 form-group">
                            <p> Área: </p>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <div class="col-6 h-100 m-auto d-flex align-items center justify-content-center">
                            <button type="button" id="buscar" class="col-6 btn boton_footer"> Buscar </button>
                        </div>




                    </div>
                </div>

            </div>
        </section>
    </section>