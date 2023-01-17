@extends ('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA MATA PELAJARAN</h2>
            <a href="/mapel/create" class="button-primary">TAMBAH DATA</a>
            @if (session('succsess'))
                <p class="text-succsess">{{session('succsess')}}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{session('error')}}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>MATA JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach($mapel as $m)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$m->nama_mapel}}</td>
                        <td>
                            <a href="/mapel/edit/{{$m->id}}" class="button-warning">EDIT</a>
                            <a href="/mapel/destroy/{{$m->id}}" class="button-danger" onClick="return confirm('Yakin hapus?')">HAPUS</a>
                        </td>
                    </tr> 
                @endforeach
            </table>
        </b>
    </center>
@endsection