<?php

namespace App\Livewire\Cliente;

use App\Models\Feedback;
use Livewire\Component;

class Buzon extends Component
{
    public string $messageType = '';
    public ?string $branch = null;
    public string $message = '';
    public ?string $customerName = null;
    public ?string $contact = null;

    public function mount(): void
    {
        $requestedType = request()->query('tipo');

        if (in_array($requestedType, ['felicitacion', 'queja', 'comentario'], true)) {
            $this->messageType = $requestedType;
        }
    }

    protected function rules(): array
    {
        return [
            'messageType' => ['required', 'in:felicitacion,queja,comentario'],
            'branch' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:15', 'max:2000'],
            'customerName' => ['nullable', 'string', 'max:120'],
            'contact' => ['nullable', 'string', 'max:120', 'regex:/^([\w\.-]+@[\w\.-]+\.[A-Za-z]{2,}|\+?[0-9\s\-\(\)]{7,20})$/'],
        ];
    }

    protected array $validationAttributes = [
        'messageType' => 'tipo de mensaje',
        'branch' => 'sucursal',
        'message' => 'mensaje',
        'customerName' => 'nombre del cliente',
        'contact' => 'teléfono o email',
    ];

    public function save(): void
    {
        $validated = $this->validate();

        Feedback::create([
            'message_type' => $validated['messageType'],
            'branch' => $validated['branch'] ?: null,
            'message' => trim($validated['message']),
            'customer_name' => $validated['customerName'] ?: null,
            'contact' => $validated['contact'] ?: null,
            'ticket_status' => 'pendiente',
        ]);

        $this->reset(['messageType', 'branch', 'message', 'customerName', 'contact']);

        session()->flash('success', 'Tu mensaje fue enviado correctamente. ¡Gracias por ayudarnos a mejorar!');
    }

    public function render()
    {
        return view('livewire.cliente.buzon');
    }
}
