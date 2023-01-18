@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form method="post" action="/mengajar/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            <option value=""></option>
                            @foreach ($guru as $ajar)
                                <option value="{{ $ajar->id }}">{{ $ajar->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            <option value=""></option>
                            @foreach ($mapel as $ajar)
                                <option value="{{ $ajar->id }}">{{ $ajar->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $ajar)
                                <option value="{{ $ajar->id }}">{{ $ajar->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> SIMPAN </button></center>
                    </td>
                </tr>
            </table>
            </form>
</center>

@endsection