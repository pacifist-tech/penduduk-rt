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
                        <td>{{ $d['nik'] }}</td>
                        <td>{{ $d['nama_lengkap'] }}</td>
                        <td>{{ $d['alamat_sebelumnya'] }}</td>
                        <td>{{ ['Laki-laki', 'Perempuan'][$d['jenis_kelamin'] - 1] }}</td>

                        <td class="">
                            <a title='Dokumen' href="{{'penduduk/file/'.$d['id']}}"><i
                                    class="bi bi-file-earmark-fill mr-3 text-emerald-400 hover:text-emerald-500"></i></a>
                            <a href="{{'penduduk/edit/'.$d['id']}}"><i class="bi bi-pencil-fill mr-3 text-amber-400 hover:text-amber-500"
                                    title='Edit'></i></a>
                            <button class="openModalButton" onclick="buttonClick('lmao')"><i
                                    class="bi bi-trash-fill text-rose-400 hover:text-rose-500" title='Hapus'></i></button>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot></tfoot>

        </table>
        <div class="modal fixed top-0 left-0 z-50 h-screen w-screen bg-black bg-opacity-30" id="myModal"
            style="display: none">
            <div class="flex h-full w-full items-center justify-center" onclick="hide()">
                <div class="modal-content relative max-w-xl rounded-lg bg-white p-10" onclick="stopPropagation(event)">
                    <button class="close absolute -top-4 -right-4 h-8 w-8 rounded-full bg-white shadow-lg">&times;</button>
                    <h2 class="text-xl font-medium">Hapus</h2>
                    <p>Apakah anda yakin untuk menghapus?</p>
                    <form action="/penduduk/delete/x" method="POST">

                        <input name='id' value="" class="hidden">
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
                console.log(message)

            }
        </script>
    </section>
@endsection
