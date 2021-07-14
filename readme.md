# Laravel Livewire Toasts

This package allows you to dynamically show Bootstrap toasts via Laravel Livewire components.

## Documentation

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Showing Toasts](#showing-toasts)
    - [Emitting Events](#emitting-events)
- [Publishing Assets](#publishing-assets)
    - [Custom Config](#custom-config)
    - [Custom View](#custom-view)

## Requirements

- Bootstrap 5 must be installed via webpack first

## Installation

Require the package:

```console
composer require bastinald/laravel-livewire-toasts
```

Add the `livewire:toasts` component to your app layout view:

```html
<livewire:toasts/>
<livewire:scripts/>
<script src="{{ asset('js/app.js') }}"></script>
```

Require `../../vendor/bastinald/laravel-livewire-toasts/resources/js/toasts` in your app javascript file:

```javascript
require('@popperjs/core');
require('bootstrap');
require('../../vendor/bastinald/laravel-livewire-toasts/resources/js/toasts');
```

## Usage

### Showing Toasts

Show a toast by emitting the `showToast` event with the color & message:

```php
public function save()
{
    $validated = $this->validate();

    $this->user->fill(array_filter($validated))->save();

    $this->emit('showToast', 'success', __('User Saved!'));
}
```

The color should be a Bootstrap color name .e.g `success`, `danger`, `info`.

### Emitting Events

You can emit events inside your views:

```html
<button type="button" wire:click="$emit('showToast', 'danger', 'Closing!')">
    {{ __('Close') }}
</button>
```

Or inside your components, just like any normal Livewire event:

```php
public function save()
{
    $this->validate();

    // save the record

    $this->emit('showToast', 'info', __('Record Saved!'));
}
```

## Publishing Assets

### Custom Config

Customize the toasts configuration by publishing the config file:

```console
php artisan vendor:publish --tag=laravel-livewire-toasts:config
```

Now you can easily change things like the hide delay and error message.

### Custom View

Use your own toasts view by publishing the view file:

```console
php artisan vendor:publish --tag=laravel-livewire-toasts:views
```

Now edit the view file inside `resources/views/vendor/laravel-livewire-toasts`. The package will use this view to render the component.
