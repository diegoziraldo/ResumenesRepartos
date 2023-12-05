  
<style>
    #tituloIndex{
        color:rgb(100, 15, 255);
        font-weight: bold;
    }
</style>


<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><span id="tituloIndex">DZ Logistica</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=cliente">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=repartidor">Repartidores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=viaje">Viajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="./?page=reporte">Reportes</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
