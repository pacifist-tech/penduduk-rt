@extends('layouts.main')

@section('container')
    <section class="bg-white p-6 rounded-2xl">
        <form class="grid grid-cols-2 text-sm gap-6">
            <div class="form-group flex flex-col gap-2">
                <label>Nama</label>
                <input class="py-2 px-3 border rounded-md" placeholder="Jajang Sutisna" autocomplete="name"></input>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label>Jenis Kelamin</label>
                <select class="py-2 px-3 border rounded-md" placeholder="Jajang Sutisna">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label>Tempat Lahir</label>
                <input class="py-2 px-3 border rounded-md" placeholder="Bogor" autocomplete="address-level1"></input>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label>Tanggal Lahir</label>
                <input class="py-2 px-3 border rounded-md" id="datepicker" class="flatpickr">

            </div>
            <div class="form-group flex flex-col gap-2">
                <label>Status Perkawinan</label>
                <select class="py-2 px-3 border rounded-md" placeholder="Jajang Sutisna">
                    <option>Kawin</option>
                    <option>Belum Kawin</option>
                    <option>Cerai</option>
                </select>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label>Pendidikan Terakhir</label>
                <select class="py-2 px-3 border rounded-md" placeholder="Jajang Sutisna">
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>
        </form>
    </section>
@endsection
