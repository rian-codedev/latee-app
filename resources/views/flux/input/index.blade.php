@blaze(fold: true, unsafe: [
    // attributes
    'icon:trailing', 'icon:leading', 'icon:variant', 'mask:dynamic',
    // flux:with-field props
    'name', 'label', 'badge',
    'description', 'description:trailing',
    'label:badge', 'label:aside', 'label:trailing',
    'error:name', 'error:bag', 'error:message', 'error:icon', 'error:nested', 'error:deep',
])

@php $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp
@php $iconLeading ??= $attributes->pluck('icon:leading'); @endphp
@php $iconVariant ??= $attributes->pluck('icon:variant'); @endphp
@php $maskDynamic ??= $attributes->pluck('mask:dynamic'); @endphp

@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'iconVariant' => 'mini',
    'variant' => 'outline',
    'iconTrailing' => null,
    'iconLeading' => null,
    'maskDynamic' => null,
    'expandable' => null,
    'clearable' => null,
    'copyable' => null,
    'viewable' => null,
    'invalid' => null,
    'loading' => null,
    'type' => 'text',
    'mask' => null,
    'size' => null,
    'icon' => null,
    'kbd' => null,
    'as' => null,
])

@php

$inputAttributes = Flux::attributesAfter('input:', $attributes, []);

// There are a few loading scenarios that this covers:
// If `:loading="false"` then never show loading.
// If `:loading="true"` then always show loading.
// If `:loading="foo"` then show loading when `foo` request is happening.
// If `wire:model` then never show loading.
// If `wire:model.live` then show loading when the `wire:model` value request is happening.
$wireModel = $attributes->wire('model');
$wireTarget = null;

if ($loading !== false) {
    if ($loading === true) {
        $loading = true;
    } elseif ($wireModel?->directive) {
        $loading = $wireModel->hasModifier('live');
        $wireTarget = $loading ? $wireModel->value() : null;
    } else {
        $wireTarget = $loading;
        $loading = (bool) $loading;
    }
}

$iconLeading ??= $icon;

$hasLeadingIcon = (bool) ($iconLeading);
$countOfTrailingIcons = collect([
    (bool) $iconTrailing,
    (bool) $kbd,
    (bool) $clearable,
    (bool) $copyable,
    (bool) $viewable,
    (bool) $expandable,
])->filter()->count();

$iconClasses = Flux::classes()
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : '')
    ;

$inputLoadingClasses = Flux::classes()
    // When loading, we need to add some extra padding to the input to account for the loading icon...
    ->add(match ($countOfTrailingIcons) {
        0 => 'pe-10',
        1 => 'pe-16',
        2 => 'pe-23',
        3 => 'pe-30',
        4 => 'pe-37',
        5 => 'pe-44',
        6 => 'pe-51',
    })
    ;

$classes = Flux::classes()
    ->add('w-full border block disabled:shadow-none dark:shadow-none')
    ->add('appearance-none') // Without this, input[type="date"] on mobile doesn't respect w-full...
    ->add('outline-none transition-all') // Smooth focus transitions + remove default outline
    ->add(match ($size) { // Pill-shaped: rounded-full, padding-adjustable
        default => 'text-sm rounded-full py-2.5',
        'sm'    => 'text-sm rounded-full py-2',
        'xs'    => 'text-xs rounded-full py-1.5',
    })
    ->add(match ($hasLeadingIcon) { // Leading padding for icon
        true  => 'ps-11',
        false => 'ps-4',
    })
    ->add(match ($countOfTrailingIcons) { // Trailing padding for icons
        0 => 'pe-4',
        1 => 'pe-10',
        2 => 'pe-16',
        3 => 'pe-23',
        4 => 'pe-30',
        5 => 'pe-37',
        6 => 'pe-44',
    })
    ->add(match ($variant) { // Background — subtle slate, white on focus
        'outline' => 'bg-slate-50 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50',
        'filled'  => 'bg-slate-100 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900',
    })
    ->add(match ($variant) { // Text color + placeholder
        'outline' => 'text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500',
        'filled'  => 'text-slate-900 dark:text-white placeholder:text-slate-500 dark:placeholder:text-slate-400',
    })
    ->add(match ($variant) { // Border + focus ring
        'outline' => 'border-slate-200 dark:border-slate-700 focus:border-brand-500 dark:focus:border-brand-400 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20',
        'filled'  => 'border-0 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20',
    })
    ->add(match ($variant) { // Invalid state
        'outline' => 'data-invalid:border-red-500 dark:data-invalid:border-red-500 data-invalid:ring-2 data-invalid:ring-red-200/50 dark:data-invalid:ring-red-500/20 disabled:data-invalid:border-red-500',
        'filled'  => 'data-invalid:border-red-500'
    })
    ->add($attributes->pluck('class:input'))
    ;
@endphp

<?php if ($type === 'file'): ?>
    <flux:with-field :$attributes :$name>
        <flux:input.file :$attributes :$name :$size />
    </flux:with-field>
<?php elseif ($as !== 'button'): ?>
    <flux:with-field :$attributes :$name>
        <div {{ $attributes->only('class')->class('w-full relative block group/input') }} data-flux-input>
            <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
                <div class="pointer-events-none absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0">
                    <flux:icon :icon="$iconLeading" :variant="$iconVariant" :class="$iconClasses" />
                </div>
            <?php elseif ($iconLeading): ?>
                <div {{ $iconLeading->attributes->class('absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0') }}>
                    {{ $iconLeading }}
                </div>
            <?php endif; ?>

            <input
                type="{{ $type }}"
                {{-- Leave file inputs unstyled... --}}
                {{ $attributes->except('class')->class($type === 'file' ? '' : $classes)->merge($inputAttributes->getAttributes()) }}
                <?php if (isset($name)): ?> name="{{ $name }}" <?php endif; ?>
                <?php if ($maskDynamic): ?> x-mask:dynamic="{{ $maskDynamic }}" @elseif ($mask) x-mask="{{ $mask }}" <?php endif; ?>
                <?php if (is_numeric($size)): ?> size="{{ $size }}" <?php endif; ?>
                @unblaze(scope: ['name' => $name ?? null, 'invalid' => $invalid ?? false])
                <?php if ($scope['invalid'] || ($scope['name'] && $errors->has($scope['name']))): ?>
                aria-invalid="true" data-invalid
                <?php endif; ?>
                @endunblaze
                data-flux-control
                data-flux-group-target
                <?php if($loading): ?> wire:loading.class="{{ $inputLoadingClasses }}" <?php endif; ?>
                <?php if($loading && $wireTarget): ?> wire:target="{{ $wireTarget }}" <?php endif; ?>
            >

            <?php if ($loading || $countOfTrailingIcons > 0): ?>
                <div class="absolute top-0 bottom-0 flex items-center gap-x-1.5 pe-2 border-e border-transparent end-0 text-xs text-slate-400 dark:text-slate-500">
                    <?php if ($loading): ?>
                        <flux:icon name="loading" :variant="$iconVariant" :class="$iconClasses" wire:loading :wire:target="$wireTarget" />
                    <?php endif; ?>

                    <?php if ($clearable): ?>
                        <flux:input.clearable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>

                    <?php if ($kbd): ?>
                        <span class="pointer-events-none last:pe-2">{{ $kbd }}</span>
                    <?php endif; ?>

                    <?php if ($expandable): ?>
                        <flux:input.expandable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>

                    <?php if ($copyable): ?>
                        <flux:input.copyable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>

                    <?php if ($viewable): ?>
                        <flux:input.viewable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>

                    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
                        <?php
                            $trailingIconClasses = clone $iconClasses;
                            $trailingIconClasses->add('text-slate-400 dark:text-slate-500 pointer-events-none');
                        ?>
                        <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$trailingIconClasses" />
                    <?php elseif ($iconTrailing): ?>
                        {{ $iconTrailing }}
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </flux:with-field>
<?php else: ?>
    <button {{ $attributes->merge(['type' => 'button'])->class([$classes, 'w-full relative flex']) }}>
        <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0">
                <flux:icon :icon="$iconLeading" :variant="$iconVariant" :class="$iconClasses" />
            </div>
        <?php elseif ($iconLeading): ?>
            <div {{ $iconLeading->attributes->class('absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0') }}>
                {{ $iconLeading }}
            </div>
        <?php endif; ?>

        <?php if ($attributes->has('placeholder')): ?>
            <div class="block self-center text-start flex-1 font-medium text-slate-400 dark:text-slate-500">
                {{ $attributes->get('placeholder') }}
            </div>
        <?php else: ?>
            <div class="text-start self-center flex-1 font-medium text-slate-800 dark:text-white">
                {{ $slot }}
            </div>
        <?php endif; ?>

        <?php if ($kbd): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 pe-4 end-0">
                {{ $kbd }}
            </div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 pe-4 end-0">
                <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$iconClasses" />
            </div>
        <?php elseif  ($iconTrailing): ?>
            <div {{ $iconTrailing->attributes->class('absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 pe-3 end-0') }}>
                {{ $iconTrailing }}
            </div>
        <?php endif; ?>
    </button>
<?php endif; ?>
