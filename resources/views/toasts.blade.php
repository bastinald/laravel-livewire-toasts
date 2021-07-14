<div class="position-absolute p-3 top-0 end-0 mw-100" style="z-index: 1080;">
    <div
        id="laravel-livewire-toasts"
        class="toast align-items-center text-white bg-{{ $color }} border-0"
        data-bs-delay="{{ config('laravel-livewire-toasts.hide_delay') }}"
        data-error-message="{{ __(config('laravel-livewire-toasts.error_message')) }}">
        <div class="d-flex">
            <div class="toast-body">
                {{ $message }}
            </div>

            <button
                type="button"
                class="btn-close btn-close-white me-2 m-auto"
                data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>
