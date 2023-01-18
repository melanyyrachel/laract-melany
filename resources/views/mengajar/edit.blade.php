@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form method="post" action="/mengajar/update/{{ $mengajar->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            <option value=""></option>
                            @foreach ($guru as $ajar)
                                <option value="{{ $ajar->id }}" 
                            @if ($ajar->id == $mengajar->guru_id)
                                    selected
                            @endif>{{ $ajar->nama_guru}}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            <option value=""></option>
                            @foreach ($mapel as $ajar)
                                <option value="{{ $ajar->id }}" 
                            @if ($ajar->id == $mengajar->mapel_id)
                                    selected
                            @endif>{{ $ajar->nama_mapel }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $ajar)
                                <option value="{{ $ajar->id }}" 
                            @if ($ajar->id == $mengajar->kelas_id)
                                    selected
                            @endif>{{ $ajar->nama_kelas }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> SIMPAN </button></center>
                    </td>
                </tr>
            </table>
            </form>
</center>

@endsection