<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Quote;
use Livewire\WithPagination;

class CitasComponent extends Component
{
    use WithPagination;
    public $search, $quotesShow, $quote;

    public $editForm = [
        'open' => false,
        'client' => null,
        'phone' => null,
        'email' => null,
        'date' => null,
        'description' => null,
        'state' => null
    ];

    protected $validationAttributes = [
        'editForm.client' => 'cliente',
        'editForm.phone' => 'teléfono',
        'editForm.email' => 'correo',
        'editForm.date' => 'fecha',
        'editForm.description' => 'descripción',
        'editForm.state' => 'estado'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getQuotes()
    {
        $this->quotesShow = Quote::all();
    }

    public function edit(Quote $quote)
    {
        $this->resetValidation();

        $this->quote = $quote;

        $this->editForm['open'] = true;
        $this->editForm['client'] = $quote->client;
        $this->editForm['phone'] = $quote->phone;
        $this->editForm['email'] = $quote->email;
        $this->editForm['date'] = $quote->date;
        $this->editForm['description'] = $quote->description;
        $this->editForm['state'] = $quote->state;
    }

    public function update()
    {
        if ($this->editForm['state'] ==  "Pendiente")
        {
            $this->quote->state =  "Atendida";
        }

        else if ($this->editForm['state'] ==  "Atendida")
        {
            $this->quote->state =  "Pendiente";
        }

        //$this->quote->state =  "Pendiente";
        $this->quote->save();

        $this->reset('editForm');
        $this->getQuotes();
    }

    public function render()
    {
        $quotes = Quote::where('client', 'LIKE', '%'. $this->search . '%')
                        ->orWhere('phone', 'LIKE', '%'. $this->search . '%')
                        ->orWhere('state', 'LIKE', '%'. $this->search . '%')
                        ->paginate();

        return view('livewire.admin.citas-component', compact('quotes'))->layout('layouts.admin');
    }
}
