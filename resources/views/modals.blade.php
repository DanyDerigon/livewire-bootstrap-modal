<div id="livewire-bootstrap-modal" class="modal"  tabindex="-1" role="dialog" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false"
     wire:ignore.self
    style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            @if ($alias)
                @livewire($alias, $params, key($activemodal))
            @endif
        </div>
    </div>
</div>
