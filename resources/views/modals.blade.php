<div id="livewire-bootstrap-modal" class="modal"  tabindex="-1" role="dialog" aria-hidden="true" wire:ignore.self
    style="z-index: 9999;">

    @if ($alias)
        @livewire($alias, $params, key($activemodal))
    @endif
</div>
