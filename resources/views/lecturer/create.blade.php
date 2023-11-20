<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Lecturer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('lecturer.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="nidn" :value="__('Nidn')" />
                            <x-text-input id="nidn" name="nidn" type="text" class="mt-1 block w-1/2" autocomplete="nidn" />
                            <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-1/2" autocomplete="nama" />
                            <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="department" :value="__('Department')" />
                            <x-select-input id="department" name="department_id" class="mt-1 block w-1/2" autocomplete="department">
                                @foreach($departments as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                        </div>
                        <x-primary-button>
                            Create
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
