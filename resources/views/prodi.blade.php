@extends('layout.template')

@section('konten')
    
</head>
<body>

    <center>
    <h1> Daftar Prodi </h1>

    <h4> Halaman Daftar Prodi </h4>

        <table border="1" style="border-collapse: collapse;">
            <thead style="background-color: black;">
                <tr style="color: white;">
                    <th> No </th>
                    <th> ID Prodi </th>
                    <th> Nama Prodi </th>
                    <th> Kaprodi </th>
                    <th> Jumlah_mahasiswa </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                
                <tr>
                    <td> {{ $i }} </td>
                    <td> {{ $item->id_prodi }} </td>
                    <td> {{ $item->nama_prodi }} </td>
                    <td> {{ $item->kaprodi }} </td>
                    <td> {{ $item->jumlah_mahasiswa}} </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        
        <a href="\prodi\create">Tambah Prodi</h1>
    </center>
</body>
@endsection