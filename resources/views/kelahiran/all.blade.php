<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Resume</title>
    <style>
        table {
            width: auto;
            table-layout: auto;
            border-collapse: collapse;
            border: 1px solid #000;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body style="line-height: 2rem">
    <div style="margin: 0 auto;display: block;">
        <div style="text-align: center;font-weight: 900">
            <h3>RUKUN TETANGGA 20/16
                <br />
                KAPUK, KECAMATAN CENGKARENG <br />JAKARTA BARAT, DKI JAKARTA
            </h3>
            <hr />
        </div>
        <h3>DAFTAR KELAHIRAN</h3>
        </h3>
        <table class="text-xs" style="font-size: 0.5rem;line-height: 1rem">
            <thead>
                <tr>
                    @foreach ( array_slice($header,1,15) as $key)
                        <th style="">{{ ucwords(str_replace('_', ' ', $key)) }}</th>
                    @endforeach
                <tr>
            </thead>
            <tbody border="1" >
                @foreach ($data as $d)
                <tr>
                        @foreach (array_slice($d,1,15) as $key => $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
