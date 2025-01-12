<?php

namespace DanyDerigon\LaravelLivewireModals\Components;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On;

class Modals extends Component
{
    public $alias;
    public $params = [];
    public $activemodal;
    public $class;


    #[On('showModal')]
    public function showModal(string $alias, array $params = [], string $class = 'modal-dialog-centered modal-lg')
    {
        $this->alias = $alias;
        $this->params = $params;
        $this->class = $class;
        $this->activemodal = rand();
        $this->dispatch('showBootstrapModal');
    }


    #[On('resetModal')]
    public function resetModal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire-bootstrap-modal::modals');
    }
}
