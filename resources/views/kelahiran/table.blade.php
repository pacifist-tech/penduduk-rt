@extends('layouts.main')

@section('container')
    <section class="w-full overflow-auto rounded-2xl border bg-white">

        <table class="stable-fixed h-full w-full border-collapse">
            <thead class="font-medium">
                <tr>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Umur</td>
                    <td>Panjang Bayi</td>
                    <td>Aksi</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d['nama_lengkap'] }}</td>
                        <td>{{ $d['tanggal_lahir'] }}</td>
                        <td>{{ $d['berat_bayi'] }}</td>
                        <td>{{ $d['panjang_bayi']}}</td>

                        <td class="">
                            <a href="{{ 'kematian/file/' . $d['id'] }}" title='Dokumen'><i
                                    class="bi bi-file-earmark-fill mr-3 text-emerald-400 hover:text-emerald-500"></i></a>
                            @if (auth()->check() &&
                                    auth()->user()->isAdmin())
                                <a href="{{ 'kelahiran/edit/' . $d['id'] }}"><i
                                        class="bi bi-pencil-fill mr-3 text-amber-400 hover:text-amber-500"
                                        title='Edit'></i></a>
                                <button class="openModalButton" onclick="buttonClick({{ $d['id'] }})"><i
                                        class="bi bi-trash-fill text-rose-400 hover:text-rose-500"
                                        title='Hapus'></i></button>
                            @endif

                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot></tfoot>

        </table>
        <div class="modal fixed left-0 top-0 z-50 h-screen w-screen bg-black bg-opacity-30" id="myModal"
            style="display: none">
            <div class="flex h-full w-full items-center justify-center" onclick="hide()">
                <div class="modal-content relative max-w-xl rounded-lg bg-white p-10" onclick="stopPropagation(event)">
                    <button class="close absolute -right-4 -top-4 h-8 w-8 rounded-full bg-white shadow-lg">&times;</button>
                    <h2 class="text-xl font-medium">Hapus</h2>
                    <p>Apakah anda yakin untuk menghapus?</p>
                    <form id='delete-form' action="/kelahiran/delete/x" method="POST">
                        @csrf

                        <input class="hidden" name='id' value="">
                        <button class="mt-6 rounded-md bg-red-400 px-6 py-1 font-semibold text-white"
                            type="submit">Hapus</button>
                    </form>
                </div>
            </div>

        </div>
        <script>
            function hide() {
                document.getElementById("myModal").style.display = "none";

            }

            function stopPropagation(event) {
                event.stopPropagation()
            }
            document.querySelector(".close").addEventListener("click", function() {
                document.getElementById("myModal").style.display = "none";


            });

            function buttonClick(message) {
                document.getElementById("myModal").style.display = "block";
                document.getElementById("delete-form").action = "/kelahiran/delete/" + message;

            }
        </script>
    </section>
@endsection
