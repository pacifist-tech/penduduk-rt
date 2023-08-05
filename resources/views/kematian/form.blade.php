@extends('layouts.main')
@php
    use App\Helpers\Utils;
@endphp

@section('container')
    <section class="rounded-2xl border bg-white p-6">
        <form action="{{ $isEdit ? route('kematian.edit', $data['id']) : route('kematian.submit') }}"
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
                                <select class="rounded-md border px-3 py-2" placeholder="Jajang Sutisna" name="{{$input['name']}}">
                                    @foreach ($input['options'] as $option)
                                        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                    @endforeach
                                </select>
                            @elseif ($input['type'] == 'textarea')
                                <textarea autocomplete="{{ Utils::replaceValue($input, 'autocomplete') }}"
                                    class="{{ 'rounded-md border py-2 px-3 col-span-2 ' . Utils::replaceValue($input, 'class') }}"
                                    value="@if ($data) {{ Utils::replace($data[$input['name']]) }} @endif" 
                                    name="{{ Utils::replaceValue($input, 'name') }}" placeholder="{{ Utils::replaceValue($input, 'placeholder') }}"
                                    >@if ($data) {{ Utils::replace($data[$input['name']]) }} @endif</textarea>
                                @error($input['name'])
                                    <span class="error text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            @else
                                <input autocomplete="{{ Utils::replaceValue($input, 'autocomplete') }}"
                                    class="rounded-md border px-3 py-2" name="{{ Utils::replaceValue($input, 'name') }}"
                                    placeholder="{{ Utils::replaceValue($input, 'placeholder') }}"
                                    value="@if($data){{ Utils::replace($data[$input['name']]) }}@endif" />
                                @error($input['name'])
                                    <span class="error text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            @endif

                        </div>

                        </div>
                    @endif
                @endforeach
            @endif

            <button class="mt-10 rounded-lg bg-blue-950 py-3 text-white"
                type='submit'>{{ $isEdit ? 'Edit' : 'Simpan' }}</button>
        </form>
    </section>
@endsection
