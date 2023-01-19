@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST NILAI</h2>
            <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        @if (session('error'))
            <p class="text-danger">{{session('error')}}</p>
        @endif
            {{-- @if(session('user')->role == 'guru')
                <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @endif --}}

            {{-- @if(session('success'))
                <p  class="text-success">{{ session('succes') }}</p>
            @endif --}}

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>GURU-MAPEL</th>
                    <th>NAMA SISWA</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
                    {{-- @if (session('user')->role == 'guru') --}}
                        <th>ACTION</th>
                    {{-- @endif --}}
                </tr>
                @foreach($nilai as $each)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $each->mengajar->guru->nama_guru}} - {{ $each->mengajar->mapel->nama_mapel }}</td>
                    <td>{{ $each->siswa->nama_siswa}}</td>
                    <td>{{ $each->uh}}</td>
                    <td>{{ $each->uts}}</td>
                    <td>{{ $each->uas }}</td>
                    <td>{{ $each->na}}</td>
                    {{-- @if (session('user')->role =='guru') --}}
                    <td>
                      <a href="/nilai/edit/{{ $each->id }}" class="button-warning">EDIT</a>  
                      <a href="/nilai/destroy/{{ $each->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus?')">HAPUS</a>
                    </td>
                    {{-- @endif --}}
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection
