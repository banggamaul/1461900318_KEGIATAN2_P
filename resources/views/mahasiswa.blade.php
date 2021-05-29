<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
       <title>home</title>
       <style>
           table{
               border-collapse: collapse;
               border-spacing: 0;
               width: 100%;
               border: 1px solid #ddd;
           }
           thead{
               background-color: aliceblue;
           }
           th,td{
               text-align: left;
               padding: 8px 16px;
           }
           tr:nth-child(even){background-color: #f2f2f2}
           .tambah{
               padding: 8px 16px;
               text-decoration: none;
           }
           </style>
    </head>
    <body>
        <p><h1>Halaman Home</h1></p>
        <div style="overflow-x: auto">
            <a class="tambah" href="{{ route('mahasiswa.create')}}">Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nbi</th>
                        <th>Nama Mahasiswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1?>
                    @foreach ( $mahasiswa as $mhs )
                    
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mhs->nbi }}</td>
                        <td>{{ $mhs->nama_mhs }}</td>
                        <td>
                            <a href="#">edit</a>
                            <a href="#">hapus</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>