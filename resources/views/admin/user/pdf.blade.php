<table widht="100%" border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th colspan="5"  align="center">Data User</th>
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
            <th widht="20" align="center">Email</th>
            <th widht="20" align="center">Jabatan</th>
            <th widht="20" align="center">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td align="center">{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td align="center">{{$item->jabatan}}</td>
            @if ($item->is_tugas == false)
                
            <td align="center">Belum Di Tugaskan</td>

            @else
            <td align="center">Sudah Di Tugaskan</td>
                
            @endif
        </tr>
            
        @endforeach
    </tbody>
</table>