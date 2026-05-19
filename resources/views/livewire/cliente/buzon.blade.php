<div class="container-xl py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9 col-xl-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h2 class="card-title mb-0">Buzón de Atención al Cliente</h2>
                </div>
                <div class="card-body">
                    <p class="text-secondary mb-4">
                        Comparte tu experiencia con nuestra pastelería/cafetería. Tu opinión nos ayuda a mejorar cada día.
                    </p>

                    @if ($successMessage)
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div>{{ $successMessage }}</div>
                            <a class="btn-close" aria-label="close" wire:click="$set('successMessage', null)"></a>
                        </div>
                    @endif

                    <form wire:submit="save" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="messageType">Tipo de mensaje <span class="text-danger">*</span></label>
                                <select id="messageType" wire:model="messageType" class="form-select @error('messageType') is-invalid @enderror">
                                    <option value="">Selecciona una opción</option>
                                    <option value="felicitacion">Felicitación</option>
                                    <option value="queja">Queja</option>
                                    <option value="comentario">Comentario</option>
                                </select>
                                @error('messageType') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="branch">Sucursal (opcional)</label>
                                <input id="branch" type="text" wire:model="branch" class="form-control @error('branch') is-invalid @enderror" placeholder="Ej. Centro Histórico" maxlength="100">
                                @error('branch') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="message">Descripción del mensaje <span class="text-danger">*</span></label>
                                <textarea id="message" wire:model="message" rows="6" class="form-control @error('message') is-invalid @enderror" placeholder="Cuéntanos con detalle lo sucedido..." maxlength="2000"></textarea>
                                @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="customerName">Nombre del cliente (opcional)</label>
                                <input id="customerName" type="text" wire:model="customerName" class="form-control @error('customerName') is-invalid @enderror" maxlength="120" placeholder="Ej. María López">
                                @error('customerName') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="contact">Teléfono o email (opcional)</label>
                                <input id="contact" type="text" wire:model="contact" class="form-control @error('contact') is-invalid @enderror" maxlength="120" placeholder="Ej. 555 123 4567 / cliente@email.com">
                                @error('contact') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">Volver</a>
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                                <span wire:loading.remove>Enviar mensaje</span>
                                <span wire:loading>Enviando...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
