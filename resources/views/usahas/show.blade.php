@include('layout.header')
<h3>NAMA STAF</h3>
<table>

    <tbody>
        <tr>
            <td width="150px">Nama Usaha</td>
            <td width="2px">:</td>
            <td>{{ $usaha->namaUsaha }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
