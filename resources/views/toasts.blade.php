<div
    id="laravel-livewire-toasts"
    class="toast position-fixed align-items-center text-white bg-{{ $color }} border-0 fade hide"
    style="top: 1rem; right: 1rem; width: 18rem; z-index: 1080;"
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
