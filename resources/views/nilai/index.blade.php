@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA SISWA</h2>
            <a href="/nilai/create" class="button-primary"> TAMBAH DATA </a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>MENGAJAR</th>
                    <th>MATA PELAJARAN</th>
                    <th>SISWA</th>
                    <th>ULANGAN HARIAN</th>
                    <th>UJIAN TENGAH SEMESTER</th>
                    <th>UJIAN AKHIR SEMESTER</th>
                    <th>NILAI AKHIR</th>
                    <th>ACTION</th>
                </tr>
                @foreach($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $n->mengajar->guru->nama_guru}}</td>
                    <td>{{ $n->mapel->nama_mapel}}</td>
                    <td>{{ $n->siswa->nama_siswa}}</td>
                    <td>{{ $n->uh}}</td>
                    <td>{{ $n->uts}}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->na}}</td>
                    <td>
                      <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>  
                      <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus?')">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection
