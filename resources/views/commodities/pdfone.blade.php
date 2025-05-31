<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>

<style>
    body {
        font-size: 12pt;
        font-family: Arial, Helvetica, sans-serif;
        margin: 40px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        width: 100px;
    }

    .header h3 {
        margin: 10px 0;
        text-transform: uppercase;
        line-height: 1.5;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        border-collapse: collapse;
    }

    table.center th {
        background-color: #f5f5f5;
        padding: 10px;
        text-align: left;
        width: 35%;
    }

    table.center td {
        padding: 10px;
    }

    .school-header {
        background-color: #f5f5f5;
        font-weight: bold;
        text-align: center;
        padding: 12px !important;
        font-size: 14pt;
    }

    table.center tr {
        border: 1px solid #000;
    }

    table.center th,
    table.center td {
        border: 1px solid #000;
    }

    .qr-placeholder {
        width: 100px;
        height: 100px;
        margin: 10px auto;
        border: 1px dashed #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 10pt;
        color: #666;
    }
</style>

<body>
    <table class="center">
        <tr>
            <td colspan="2" class="school-header">Barang Milik {{ $sekolah }}</td>
        </tr>
        <tr>
            <th>Kode Barang</th>
            <td><strong>{{ $commodity->item_code }}</strong></td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $commodity->name }}</td>
        </tr>
        <tr>
            <th>Asal Perolehan</th>
            <td>{{ $commodity->commodity_acquisition->name }}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <div class="qr-placeholder">
                    QR Code<br>{{ $commodity->item_code }}
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
