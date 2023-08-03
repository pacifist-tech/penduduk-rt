@extends('layouts.main')
@php
    use App\Helpers\Utils;
@endphp

@section('container')
    <section class="rounded-2xl border bg-white p-6">
        <form action="{{ $isEdit ? route('penduduk.edit', $data['id']) : route('form.submit') }}"
            class="grid grid-cols-2 gap-6 text-sm" method="POST">
            @csrf
            @if ($isEdit)
                @method('PUT')
            @else
            @endif

            @if ($isEdit)
                <input name="_method" type="hidden" value="PUT">
            @endif
            @if (isset($inputs))
                @foreach ($inputs as $input)
                    @if ($input['type'] == 'hr')
                        <hr class="form-group col-span-2 my-10 flex flex-col gap-2">
                        </hr>
                    @else
                        <div class="form-group flex flex-col gap-2">
                            <label for="{{ $input['name'] }}">{{ $input['label'] }}</label>
                            @if ($input['type'] == 'select')
                                <select class="rounded-md border py-2 px-3" placeholder="Jajang Sutisna">
                                    @foreach ($input['options'] as $option)
                                        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                    @endforeach
                                </select>
                            @elseif ($input['type'] == 'textarea')
                                <textarea autocomplete="{{ Utils::replaceValue($input, 'autocomplete') }}"
                                    class="{{ 'rounded-md border py-2 px-3 col-span-2 ' . Utils::replaceValue($input, 'class') }}"
                                    name="{{ Utils::replaceValue($input, 'name') }}" placeholder="{{ Utils::replaceValue($input, 'placeholder') }}"></textarea>
                                @error($input['name'])
                                    <span class="error text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            @else
                                <input autocomplete="{{ Utils::replaceValue($input, 'autocomplete') }}"
                                    class="rounded-md border py-2 px-3" name="{{ Utils::replaceValue($input, 'name') }}"
                                    placeholder="{{ Utils::replaceValue($input, 'placeholder') }}"
                                    value="@if ($data) {{Utils::replace($data[$input['name']])}} @endif" />
                                @error($input['name'])
                                    <span class="error text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            @endif

                        </div>

                        </div>
                    @endif
                @endforeach
            @endif

            <button class="bg-blue-950 mt-10 rounded-lg py-3 text-white"
                type='submit'>{{ $isEdit ? 'Edit' : 'Simpan' }}</button>
        </form>
    </section>
@endsection
