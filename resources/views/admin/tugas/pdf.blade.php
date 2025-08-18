<table widht="100%" border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th colspan="5"  align="center">Data Tugas</th>
        </tr>
        <tr>
            <th colspan="5" align="center">
                 Tanggal :{{$tanggal}} 
            </th>
        </tr>
        <tr>
            <th colspan="5" align="center">
                Pukul :  {{$jam}}
            </th>
        </tr>
        <tr>
            <th widht="20" align="center">No</th>
            <th widht="20" align="center">Nama</th>
            <th widht="20" align="center">Tugas</th>
            <th widht="20" align="center">Tanggal-Mulai</th>
            <th widht="20" align="center">Tanggal-Selesai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tugas as $item)
        <tr>
            <td align="center">
                {{$loop->iteration}}
            </td>
            <td>
                {{$item->user->nama}}
            </td>
            <td>
                {{$item->tugas}}
            </td>
            <td align="center">
                {{$item->tanggal_mulai}}
            </td>
            <td>
                {{$item->tanggal_selesai}}
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>