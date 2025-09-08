<div class="checkout-steps d-flex justify-content-center align-items-center my-4">
    <div class="step {{ $step == 1 ? 'active' : '' }}">
        <span class="circle">1</span>
        <span class="label">Mi cesta</span>
    </div>
    <div class="line"></div>
    <div class="step {{ $step == 2 ? 'active' : '' }}">
        <span class="circle">2</span>
        <span class="label">Dirección de envío</span>
    </div>
    <div class="line"></div>
    <div class="step {{ $step == 3 ? 'active' : '' }}">
        <span class="circle">3</span>
        <span class="label">Opciones de entrega</span>
    </div>
    <div class="line"></div>
    <div class="step {{ $step == 4 ? 'active' : '' }}">
        <span class="circle">4</span>
        <span class="label">Método de pago</span>
    </div>
    <div class="line"></div>
    <div class="step {{ $step == 5 ? 'active' : '' }}">
        <span class="circle">5</span>
        <span class="label">Resumen</span>
    </div>
</div>