<div id="livewire-bootstrap-modal" class="modal"  tabindex="-1" role="dialog" aria-hidden="true" wire:ignore.self
     style="z-index: 9999;">
    <div class="modal-dialog {{$class}}">
        <div class="modal-content">
            @if ($alias)
                @livewire($alias, $params, key($activemodal))
            @endif
        </div>
    </div>
</div>
