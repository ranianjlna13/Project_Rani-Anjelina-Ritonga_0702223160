@extends('layout.template')

@section('konten')
    
</head>
<body class="bg-light">
    <main class= "container">
    <h1>Form Daftar Prodi</h1>
    <hr>

    <form action=' {{ url('prodi') }}' method="POST">
    @csrf
    <table>
        <tr>
            <th style= "text-align: left;">
                <label for= "">No</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="no">
            </td>
        </tr>
        <tr>
            <th style= "text-align: left;">
                <label for= "">ID prodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="id_prodi">
            </td>
        </tr>
        <tr>
        <th style= "text-align: left;">
                <label for= "">Nama Prodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="nama_prodi">
            </td>
        </tr>
        <tr>
        <th style= "text-align: left;">
                <label for= "">Kaprodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="kaprodi">
            </td>
        </tr>
        <th style= "text-align: left;">
                <label for= "">Jumlah_mahasiswa</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="jumlah_mahasiswa">
            </td>
            <td colspan="3">
                <button style="width:100%">SIMPAN</button>
            </td>
        </tr>
    </table>

    </form>
</body>
@endsection