<?php

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\ValidationException;

new class extends Component {
    public UserForm $form;

    public function editUser($userId)
    {
        $user = User::with('roles')->findOrFail($userId);
        $this->form->setUser($user);
    }

    public function updateUser()
    {
        // Guard: diri sendiri
        if ($this->form->user?->id === auth()->id()) {
            if ($this->form->role !== 'admin') {
                $this->addError('form.role', 'Anda tidak dapat mengubah role Anda sendiri.');
                return;
            }
            if (! $this->form->is_active) {
                $this->addError('form.is_active', 'Anda tidak dapat menonaktifkan akun Anda sendiri.');
                return;
            }
        }

        // Guard: admin terakhir
        if (
            $this->form->user?->hasRole('admin')
            && $this->form->role !== 'admin'
            && User::role('admin')->count() <= 1
        ) {
            $this->addError('form.role', 'Tidak dapat mengubah role admin terakhir.');
            return;
        }

        try {
            $this->form->update();
            session()->flash('success', 'Informasi pengguna berhasil diperbarui.');
            $this->dispatch('user-updated', message: 'Informasi pengguna berhasil diperbarui.');
        } catch (ValidationException $e) {
            $this->dispatch('update-error', message: 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
};
?>

<div>
    <div x-data="{
        show: false,
        errorMessage: '',
        successMessage: '',
        init() {
            window.addEventListener('edit-user-modal', (e) => {
                $wire.editUser(e.detail.userId);
                this.successMessage = '';
                this.errorMessage = '';
                this.show = true;
            });
            window.addEventListener('update-error', (e) => {
                this.errorMessage = e.detail.message;
            });
            window.addEventListener('user-updated', (e) => {
                this.show = false;
                this.successMessage = e.detail.message;
            });
        },
    }" x-show="show" x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-3 text-xs sm:p-4" x-cloak
        @click.self="show = false">

        <div class="flex max-h-[90vh] w-full max-w-md flex-col overflow-hidden rounded-lg bg-white shadow-xl dark:bg-stone-900"
            @click.stop>

            {{-- Loading editUser --}}
            <div wire:loading wire:target="editUser"
                class="absolute inset-0 z-50 flex items-center justify-center bg-white/60 backdrop-blur-[0.5px] dark:bg-stone-900/60">
                <div class="flex items-center gap-1.5 rounded-md border border-stone-100 bg-white px-2.5 py-1.5 shadow-sm dark:border-stone-700 dark:bg-stone-800">
                    <svg class="h-3.5 w-3.5 animate-spin text-sage-600 dark:text-sage-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    <span class="text-[10px] font-medium text-stone-600 dark:text-stone-300">{{ __('Memuat data...') }}</span>
                </div>
            </div>

            {{-- Loading updateUser --}}
            <div wire:loading wire:target="updateUser"
                class="absolute inset-0 z-50 flex items-center justify-center bg-white/60 backdrop-blur-[0.5px] dark:bg-stone-900/60">
                <div class="flex items-center gap-1.5 rounded-md border border-stone-100 bg-white px-2.5 py-1.5 shadow-sm dark:border-stone-700 dark:bg-stone-800">
                    <svg class="h-3.5 w-3.5 animate-spin text-sage-600 dark:text-sage-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    <span class="text-[10px] font-medium text-stone-600 dark:text-stone-300">{{ __('Menyimpan data...') }}</span>
                </div>
            </div>

            <form wire:submit.prevent="updateUser" class="flex min-h-0 flex-1 flex-col">

                {{-- HEADER --}}
                <div class="flex-shrink-0 space-y-3 p-4 pb-3">
                    <div>
                        <h3 class="text-sm font-semibold text-stone-800 dark:text-stone-100">{{ __('Edit Pengguna') }}</h3>
                        <p class="mt-0.5 text-[11px] leading-normal text-stone-500 dark:text-stone-400">{{ __('Perbarui profil dan hak akses anggota.') }}</p>
                    </div>
                    <div class="border-t border-stone-100 dark:border-stone-800"></div>
                </div>

                {{-- BODY --}}
                <div class="min-h-0 flex-1 overflow-y-auto px-4">
                    <div x-show="errorMessage" x-cloak
                        class="mb-2 rounded-md border border-red-200 bg-red-50 px-2.5 py-1.5 text-[11px] text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300"
                        x-text="errorMessage"></div>

                    <div class="space-y-2.5 pb-4">
                        {{-- Nama --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Nama Lengkap') }}</label>
                            <input wire:model="form.full_name" type="text" required
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                            @error('form.full_name')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Email') }}</label>
                            <input wire:model="form.email" type="email" required
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                            @error('form.email')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Password (opsional) --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Password Baru (opsional)') }}</label>
                            <input wire:model="form.password" type="password" placeholder="Kosongkan jika tidak ingin ganti"
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                            @error('form.password')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Konfirmasi Password Baru') }}</label>
                            <input wire:model="form.password_confirmation" type="password" placeholder="Ulangi password baru"
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                        </div>

                        {{-- Role --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Peran') }}</label>
                            <select wire:model="form.role" required
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100">
                                @foreach (Role::orderBy('name')->get() as $r)
                                    <option value="{{ $r->name }}">{{ ucfirst($r->name) }}</option>
                                @endforeach
                            </select>
                            @error('form.role')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Status --}}
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Status') }}</label>
                            <div class="flex items-center gap-2.5 rounded-md border border-stone-200 bg-stone-50 px-2.5 py-2 dark:border-stone-700 dark:bg-stone-800">
                                <button type="button" wire:click="$toggle('form.is_active')" role="switch"
                                    aria-checked="{{ $form->is_active ? 'true' : 'false' }}"
                                    class="relative inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-1 {{ $form->is_active ? 'bg-sage-600 dark:bg-sage-500' : 'bg-stone-300 dark:bg-stone-600' }}">
                                    <span class="inline-block h-3.5 w-3.5 transform rounded-full bg-white shadow transition-transform {{ $form->is_active ? 'translate-x-[18px]' : 'translate-x-0.5' }}"></span>
                                </button>
                                <div class="flex flex-col">
                                    <span class="text-[11px] font-medium {{ $form->is_active ? 'text-sage-700 dark:text-sage-400' : 'text-stone-500 dark:text-stone-400' }}">{{ $form->is_active ? __('Aktif') : __('Non Aktif') }}</span>
                                    <span class="text-[10px] text-stone-400 dark:text-stone-500">{{ $form->is_active ? __('Dapat login.') : __('Tidak dapat login.') }}</span>
                                </div>
                            </div>
                            @error('form.is_active')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>

                {{-- FOOTER --}}
                <div class="flex flex-shrink-0 justify-end gap-1.5 border-t border-stone-100 bg-white p-4 pt-3 dark:border-stone-800 dark:bg-stone-900">
                    <button type="button" @click="show = false"
                        class="cursor-pointer rounded-md border border-stone-200 px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:text-stone-400 dark:hover:bg-stone-800">
                        {{ __('Batal') }}
                    </button>
                    <button type="submit" wire:loading.attr="disabled" wire:target="updateUser"
                        class="bg-sage-600 hover:bg-sage-700 focus:ring-sage-500 dark:bg-sage-500 dark:hover:bg-sage-600 cursor-pointer rounded-md px-3 py-1.5 text-xs font-medium text-white transition focus:outline-none focus:ring-2 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60">
                        {{ __('Perbarui Data') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
