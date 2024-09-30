<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sk Izin Menikah</title>
    <style>
        body {
            color: rgba(0, 0, 0, 0.8);
        }

        .full-width {
            width: 100%;
        }

        .logo {
            float: left;
            margin-bottom: 15px;
            margin-right: 15px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .header {
            color: #000;
            border-bottom: 4px double #000;
            margin-bottom: 10px;
        }

        .header-text {
            text-align: center;
        }

        .header-text * {
            margin: 1px;
        }

        .header-text p {
            font-size: 12px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-50 {
            margin-top: 50px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        table {
            font-size: 14px;
        }

        .mt-0, .mb-0 {
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <div style="float: left; width: 70px;">
            <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents('img/logo.png')) }}"
                alt="image" width="70">
        </div>
        <div style="float: left; margin-left: 10px; width: 78%; " class="text-center header-text ">
            <h2 style="margin: 1px;">PEMERINTAH KOTA MAKASSAR</h2>
            <h2 style="margin: 1px;">KECAMATAN TAMALANREA</h2>
            <h2 style="margin: 1px;"><strong>KELURAHAN TAMALANREA JAYA</strong></h2>
            <p style="margin: 1px;">Jl. perintis kemerdekaan km 40, makassar.com, makassar</p>
        </div>
        <div style="float: right; width: 70px;">
            <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents('img/logo.png')) }}"
                alt="image" width="70">
        </div>

        </div>
        @if($request)
        @if ( $request->jenis_surat == 'sktm')
        <h4 class="text-center mb-0"><u>SURAT KETERANGAN TIDAK MAMPU</h4>
            @elseif ($request->jenis_surat == 'sk-izin-menikah')
            <h4 class="text-center mb-0"><u>SURAT KETERANGAN BELUM MENIKAH</h4>
                @else
                <h4 class="text-center mb-0"><u>SURAT DOMISILI</h4>
        @endif
        @endif
        <p class="text-center mt-0 ">NOMOR : {{ $request ? $request->nomor_surat : '' }}</p>
        {{-- TABLE BIODATA MAHASISWA --}}
        <p class="mt-10">Yang bertanda tangan di bawah ini : </p>
        <table style="margin-left: 20px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $request->admin->name ?? '' }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{ $request->admin->jabatan ?? '' }}</td>
            </tr>

        </table>

        <br>
        <p class="mt-10">Dengan ini menerangkan bahwa : </p>
        <table style="margin-left: 20px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $user->name ?? '' }}</td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>:</td>
                <td>{{ $user->nik ?? '' }}</td>
            </tr>
            {{-- tempat lahir, jenis kelamin, status perkawinan, agama, pekerjaan, alamat  --}}
            <tr>
                <td>Tempat, Tgl. Lahir</td>
                <td>:</td>
                <td>{{ $user->tempat_tanggal_lahir ?? '' }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $user->agama ?? '' }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $user->pekerjaan ?? '' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $user->alamat ?? '' }}</td>
            </tr>

        </table>

        <br>
        <p>Yang tersebut namanya di atas adalah penduduka kelurahan Tamalanrea Jaya Kecamatan Tamalanrea Kota Makassar dan berdomisili pada alamat tersebut diatas sesuai pengantar Nomor 90/pj RW.01/TJ tanggal 11 September 2024 yang bersangkutan <strong>Belum menikah </strong></p>
        <p>Demikian surat keterangan ini diberikan dan dipergunakan <strong>KELENGKAPAN ADMINISTRASI</strong></p>

        {{-- tanda tangan --}}
        <table border="0" class="full-width">
            <tr>
                <td style="width: 50%"></td>
                <td style="width: 50%"></td>
                <td style="width: 50%">Makassar,{{ Date('d-m-Y') }}</td>
            </tr>

            <tr>
                <td style="width: 50%"></td>
                <td style="width: 50%"></td>
                <td style="width: 50%">{{ $request->admin->jabatan }}</td>
            </tr>
            <tr>
                <td style="height: 50px"></td>
                <td style="height: 50px"></td>
                <td style="height: 50px; position: relative">
                    <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents('img/verified.png')) }}"
                    alt="image" width="70">
                    <img style="position: absolute; left:0; top:0; width: 170px" src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents('storage/signatures/' . $request->tanda_tangan)) }}"
                    alt="image" width="70"></td>
            </tr>
            <tr>
                <td style="width: 50%"></td>
                <td style="width: 50%"></td>
                <td style="width: 50%"><strong>{{ $request->admin->name }}</strong></td>
            </tr>
        </table>

    </div>
</body>

</html>
