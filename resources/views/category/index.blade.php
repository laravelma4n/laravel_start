<h1>Listado de categorias</h1>

<br>
<a href="category/create">NUEVA CATEGORIA </a>

<table border=1>
  <thead>
      <th> ID</th>
      <th> TIPO</th>
      <th> CREADO</th>
      <th> EDITAR</th>
      <th> ELIMINAR</th>
  <thead>
  <tbody>
      @foreach($categories as $c)
        <tr>
          <td>{{ $c->id }}</td>
          <td>{{ $c->type }}</td>
          <td>{{ $c->created_at }}</th>
          <td><a href="category/edit/{{ $c->id }}">edit</a></td>
          <td><a href="category/del/{{ $c->id }}">del</a></td>
        </tr>
      @endforeach
  </tbody>
</table>
