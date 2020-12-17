<table class="table">
  <thead class="thead-dark">
    <tr>
        <th>No</th>  
        <th>Judul</th> 
        <th>Isi</th>        
        <th>Aksi</th>
   
   </tr>
  </thead>
  <tbody>
      @foreach($beritas as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>      
        <td>{{ $item->judul }}</td>
        <td>{{ $item->isi }}</td>

      <td>
         <a href="{{ route('berita.show',$item) }}" class="btn btn-info">Tampil</a>
      
      </td>

      </tr>
      @endforeach


  </tbody>
</table>