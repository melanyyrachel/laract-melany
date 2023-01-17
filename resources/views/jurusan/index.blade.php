@extends ('main.layout')
@section('content')
    <center>
        <b>
            <h2>JURUSAN</h2>
            <a href="/jurusan/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NAMA JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach($jurusan as $j)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$j->nama_jurusan}}</td>
                        <td>
                            <a href="/jurusan/edit/{{$j->id}}" class="button-warning">EDIT</a>
                            <a href="/jurusan/destroy/{{$j->id}}" class="button-danger" onClick="return confirm('Yakin hapus?')">HAPUS</a>
                        </td>
                    </tr> 
                @endforeach
            </table>
        </b>
    </center>
@endsection