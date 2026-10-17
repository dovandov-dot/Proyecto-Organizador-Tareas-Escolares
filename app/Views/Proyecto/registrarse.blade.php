@component('Proyecto.home', array('titulo' => "Registro"))

<div class="card m-3 p-5">
    <h2 class="text-center card-title">Registrarse</h2>
    <form class="needs-validation">
        <div class="mb-5">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese su nombre completo" required>
        </div> 
        <div class="mb-5">
            <label class="form-label">Correo</label>
            <input type="text" class="form-control" placeholder="Ingrese su correo electrónico" required>
        </div> 
        <div class="mb-5">
            <label class="form-label">Contraseña</label>
            <input type="text" class="form-control" placeholder="Ingrese contraseña" required>
        </div> 
        <div class="mb-5">
            <label class="form-label">Retir contraseña</label>
            <input type="text" class="form-control" placeholder="Repita su contraseña" required>
        </div> 

        <div class="grid grid-cols-2">
            <div class="d-grid gap-2">
                <button type="submit" class="btn-solid theme-primary">Registrarme</button>
            </div>
            <div class="d-grid gap-2">
                <button type="button" class="btn-solid theme-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>

@endcomponent