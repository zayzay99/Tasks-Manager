<h1 align="center">Data Tugas</h1>
<h3 align="center">Tanggal : {{$tanggal}}</h3>
<h3 align="center">Pukul : {{$jam}}</h3>
<hr>
<table width="100%" border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th width="20" align="center">No</th>
            <th width="20" align="center">Nama</th>
            <th width="20" align="center">Email</th>
            <th width="20" align="center">Tugas</th>
            <th width="20" align="center">Tanggal Mulai</th>
            <th width="20" align="center">Tanggal Selesai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tugas as $item)
        <tr>
            <td align="center">{{ $loop->iteration }}</td>
            <td>{{ $item->user->nama }}</td>
            <td>{{ $item->user->email }}</td>
            <td>{{ $item->tugas }}</td>
            <td align="center">{{ $item->tanggal_mulai }}</td>
            <td>{{ $item->tanggal_selesai }}</td>
        </tr>
        @endforeach
    </tbody>


</table>