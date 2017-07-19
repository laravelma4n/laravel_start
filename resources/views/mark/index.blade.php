<h1>Listado de marcas</h1>

<br>
<table border=1>
  <thead>
      <th> ID</th>
      <th> NOMBRE</th>
      <th> CREADO</th>
  <thead>
  <tbody>
      @foreach($marks as $m)
        <tr>
          <td>{{ $m->id }}</td>
          <td>{{ $m->name }}</td>
          <td>{{ $m->created_at }}</th>
        </tr>
      @endforeach
  </tbody>
</table>
