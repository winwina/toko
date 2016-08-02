<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Toko Buku dan Kitab IRFAN</h2>

                <a href="{{url('/barang')}}" class="btn btn-success">Master Barang</a>
                <a href="{{url('#')}}" class="btn btn-success">Pembelian</a>
                <a href="{{url('#')}}" class="btn btn-success">Penjualan</a>
                <a href="{{url('#')}}" class="btn btn-success">Pemesanan</a>
                <a href="{{url('#')}}" class="btn btn-success">Daftar Belanja</a>
                <a href="{{url('#')}}" class="btn btn-success">Laporan</a>
            </div>
        </div>
    </body>
</html>
