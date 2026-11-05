@blaze(fold: false, unsafe: [
    'icon:trailing', 'icon:leading', 'icon:variant', 'mask:dynamic',
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
    'colorTheme' => 'blue',
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
    ->add($iconVariant === 'outline' ? 'size-5' : '')
    ;

$inputLoadingClasses = Flux::classes()
    ->add(match ($countOfTrailingIcons) {
        0 => 'pe-10', 1 => 'pe-16', 2 => 'pe-23', 3 => 'pe-30',
        4 => 'pe-37', 5 => 'pe-44', 6 => 'pe-51',
    })
    ;

$classes = Flux::classes()
    ->add('w-full border block disabled:shadow-none dark:shadow-none')
    ->add('appearance-none')
    // ✅ OUTLINE + TRANSITION (persis contoh)
    ->add('outline-none transition-all')
    // ✅ SHADOW: `shadow` (persis contoh — bukan shadow-xs)
    ->add('shadow')
    ->add(match ($size) {
        default => 'text-sm rounded-full py-2',
        'md'    => 'text-sm rounded-full py-2.5',
        'xs'    => 'text-xs rounded-full py-1.5',
    })
    ->add(match ($hasLeadingIcon) {
        true  => 'ps-11',
        false => 'ps-4',
    })
    ->add(match ($countOfTrailingIcons) {
        0 => 'pe-4', 1 => 'pe-10', 2 => 'pe-16', 3 => 'pe-23',
        4 => 'pe-30', 5 => 'pe-37', 6 => 'pe-44',
    })
    // BACKGROUND: default PUTIH, hover tema-50, focus kembali putih
    ->add(match ($variant) {
        'outline' => "bg-white dark:bg-slate-900 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50",
        'filled'  => "bg-slate-100 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900",
    })
    // Text + placeholder
    ->add(match ($variant) {
        'outline' => 'text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500',
        'filled'  => 'text-slate-900 dark:text-white placeholder:text-slate-500 dark:placeholder:text-slate-400',
    })
    // ✅ BORDER + FOCUS — PERSIS SEPERTI CONTOH:
    //    - border default: slate-200 / slate-700
    //    - focus border: {color}-500
    //    - focus ring: ring-3 + {color}-200/50, dark: {color}-500/20
    ->add(match ($variant) {
        'outline' => "border-slate-200 dark:border-slate-700 focus:border-{$colorTheme}-500 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
        'filled'  => "border-0 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
    })
    // Invalid state
    ->add(match ($variant) {
        'outline' => 'data-invalid:border-red-400 dark:data-invalid:border-red-400 data-invalid:ring-3 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30 disabled:data-invalid:border-red-400',
        'filled'  => 'data-invalid:border-red-400'
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
                <div class="pointer-events-none absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0 transition-colors group-focus-within:text-{{ $colorTheme }}-500 dark:group-focus-within:text-{{ $colorTheme }}-400">
                    <flux:icon :icon="$iconLeading" :variant="$iconVariant" :class="$iconClasses" />
                </div>
            <?php elseif ($iconLeading): ?>
                <div {{ $iconLeading->attributes->class("absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 ps-4 start-0 transition-colors group-focus-within:text-{$colorTheme}-500 dark:group-focus-within:text-{$colorTheme}-400") }}>
                    {{ $iconLeading }}
                </div>
            <?php endif; ?>

            <input
                type="{{ $type }}"
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
        <?php elseif ($iconTrailing): ?>
            <div {{ $iconTrailing->attributes->class('absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 pe-3 end-0') }}>
                {{ $iconTrailing }}
            </div>
        <?php endif; ?>
    </button>
<?php endif; ?>
