
@php
    use App\Helpers\Utils;
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Kelahiran {{$data['nama_lengkap']}}</title>
</head>

<body style="line-height: 2rem">
    <div style="margin: 0 auto;display: block;width: 500px;">
        <div style="text-align: center;font-weight: 900">
            <h3>RUKUN TETANGGA 20/16
                <br />
                KAPUK, KECAMATAN CENGKARENG <br />JAKARTA BARAT, DKI JAKARTA
            </h3>
            <hr />
        </div>
        <p style="text-indent: 2rem; text-align: justify">Yang bertandatangan dibawah ini Ketua RT 20/16 Kapuk Cengkareng
            menerangkan dengan sesungguhnya bahwa:</p>
        <table style="line-height: 1rem" width="100%">
            @foreach (array_slice($data, 1, -2) as $key=> $value)
            <tr>
                <td>{{ucwords(str_replace('_', ' ', $key))}}</td>
                <td>: {{ $value }}</td>
            </tr>
            @endforeach

        </table>

        <p style="text-indent: 2rem; text-align: justify">
            Dengan ini, kami mengumumkan dengan sedih bahwa pada tanggal {{Utils::toIndonesianDate($data["created_at"])}}, telah berpulang ke Rahmatullah {{$data['nama_lengkap']}}. Almarhum/almarhumah merupakan warga sah RT 20/16 Kapuk Cengkareng, Jakarta Barat, DKI Jakarta, tertanda tanggal surat ini dibuat. Semasa hidupnya, almarhum/almarhumah telah berjasa dan memberikan kontribusi yang berharga bagi lingkungan sekitar dan komunitas. Semoga amal ibadahnya diterima di sisi Allah SWT dan keluarga yang ditinggalkan diberikan kekuatan dan kesabaran menghadapi kehilangan ini.
            </p>
        <div style="line-height: 0.5rem;text-align: right; width: 100%; margin-top:2rem">
            <p>Jakarta, {{Utils::toIndonesianDate($data["created_at"])}}</p>
            <p>Ketua RT 20/16</p>
            <p style="margin-top: 6rem">Tut Wuri Handayani</p>
        </div>
    </div>
</body>

</html>
