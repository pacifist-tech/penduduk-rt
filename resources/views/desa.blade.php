@extends('layouts.main')

@section('container')
    <section class="w-full overflow-auto rounded-2xl border bg-white">
        <table class="stable-fixed h-full w-full border-collapse">
            <thead class="font-medium">
                <tr>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>AKSI</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{$d["nik"]}}</td>
                    <td>{{$d["name"]}}</td>
                    <td>{{$d["address"]}}</td>
                    <td>{{$d["jenis_kelamin"]}}</td>
                    
                    <td class="">
                        <button title='Dokumen'><i class="bi bi-file-earmark-fill mr-3 text-emerald-400 hover:text-emerald-500"></i></button>
                        <a href='edit/9'><i class="bi bi-pencil-fill mr-3 text-amber-400 hover:text-amber-500" title='Edit'></i></a>
                        <button><i class="bi bi-trash-fill text-rose-400 hover:text-rose-500" title='Hapus'></i></button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            <tfoot></tfoot>

        </table>
    </section>
@endsection
