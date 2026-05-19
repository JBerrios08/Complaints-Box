<div class="container-xl py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9 col-xl-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4 pb-0 px-4">
                    <h2 class="card-title mb-1">Buzón de Atención al Cliente</h2>
                    <p class="text-secondary mb-0">
                        Comparte tu experiencia con nuestra pastelería/cafetería. Tu opinión nos ayuda a mejorar cada día.
                    </p>
                </div>

                <div class="card-body p-4">
                    <form wire:submit="save" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="messageType">
                                    <i class="fa-solid fa-list text-primary me-1"></i>
                                    Tipo de mensaje <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                    <select id="messageType" wire:model="messageType" class="form-select @error('messageType') is-invalid @enderror" aria-label="Tipo de mensaje">
                                        <option value="">Selecciona una opción</option>
                                        <option value="felicitacion">Felicitación</option>
                                        <option value="queja">Queja</option>
                                        <option value="comentario">Comentario</option>
                                    </select>
                                    @error('messageType') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="branch">
                                    <i class="fa-solid fa-store text-primary me-1"></i>
                                    Sucursal (opcional)
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                    <input id="branch" type="text" wire:model="branch" class="form-control @error('branch') is-invalid @enderror" placeholder="Ej. Centro Histórico" maxlength="100">
                                    @error('branch') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold" for="message">
                                    <i class="fa-solid fa-comment-dots text-primary me-1"></i>
                                    Descripción del mensaje <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text align-items-start pt-2"><i class="fa-solid fa-comment-dots"></i></span>
                                    <textarea id="message" wire:model="message" rows="6" class="form-control @error('message') is-invalid @enderror" placeholder="Cuéntanos con detalle lo sucedido..." maxlength="2000"></textarea>
                                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="customerName">
                                    <i class="fa-solid fa-user text-primary me-1"></i>
                                    Nombre del cliente (opcional)
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input id="customerName" type="text" wire:model="customerName" class="form-control @error('customerName') is-invalid @enderror" maxlength="120" placeholder="Ej. María López">
                                    @error('customerName') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="contact">
                                    <i class="fa-solid fa-envelope text-primary me-1"></i>
                                    Teléfono o email (opcional)
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input id="contact" type="text" wire:model="contact" class="form-control @error('contact') is-invalid @enderror" maxlength="120" placeholder="Ej. 555 123 4567 / cliente@email.com">
                                    @error('contact') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                                <i class="fa-solid fa-arrow-left me-1"></i>
                                Volver
                            </a>
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                                <span wire:loading.remove>
                                    <i class="fa-solid fa-paper-plane me-1"></i>
                                    Enviar mensaje
                                </span>
                                <span wire:loading>
                                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                    Enviando...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('feedback-saved', () => {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: '¡Gracias! Hemos recibido tu mensaje.',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            });
        });
    </script>
@endpush
