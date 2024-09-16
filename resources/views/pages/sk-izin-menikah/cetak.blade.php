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
        <h4 class="text-center mb-0"><u>SURAT KETERANGAN BELUM MENIKAH</u></h4>
        <p class="text-center mt-0 ">NOMOR : </p>
        {{-- TABLE BIODATA MAHASISWA --}}
        <p class="mt-10">Yang bertanda tangan di bawah ini : </p>
        <table style="margin-left: 20px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>--</td>
            </tr>

        </table>

        <br>
        <p class="mt-10">Dengan ini menerangkan bahwa : </p>
        <table style="margin-left: 20px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>:</td>
                <td>--</td>
            </tr>
            {{-- tempat lahir, jenis kelamin, status perkawinan, agama, pekerjaan, alamat  --}}
            <tr>
                <td>Tempat, Tgl. Lahir</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>--</td>
            </tr>

        </table>

        <br>
        <p>Yang tersebut namanya di atas adalah penduduka kelurahan Tamalanrea Jaya Kecamatan Tamalanrea Kota Makassar dan berdomisili pada alamat tersebut diatas sesuai pengantar Nomor 90/pj RW.01/TJ tanggal 11 September 2024 yang bersangkutan <strong>Belum menikah </strong></p>
        <p>Demikian surat keterangan ini diberikan dan dipergunakan <strong>KELENGKAPAN ADMINISTRASI</strong></p>


    </div>
</body>

</html>
