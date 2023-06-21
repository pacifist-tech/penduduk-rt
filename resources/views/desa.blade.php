@extends('layouts.main')

@section('container')
    <section class=" border bg-white rounded-2xl overflow-auto w-full h-full">
            <table class="stable-fixed w-full h-full border-collapse" >
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
                    <tr>
                        <td>3201010121921</td>
                        <td>Ahmad Sobari</td>
                        <td>Jl. Tulung Agung no 6</td>
                        <td>Laki-Laki</td>
                        <td class=""><button><i class="bi bi-pencil-fill text-yellow-500 mr-3"></i></button><button><i class="bi bi-trash-fill text-red-500"></i></button></td>
                    </tr>
                    <tr>
                        <td>3201010121923</td>
                        <td>Kevin Sanjaya</td>
                        <td>Jl. Tulung Agung no 6</td>
                        <td>Laki-Laki</td>
                    </tr>
                </tbody>
                <tfoot></tfoot>

            </table>
    </section>
@endsection
