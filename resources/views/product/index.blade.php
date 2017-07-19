<h1>Listado de productos</h1>

<br>
<a href="/product/create"> NUEVO PRODUCTO</a>

<table border=1>
  <thead>
      <th> ID</th>
      <th> NOMBRE</th>
      <th> DESCRIPCION</th>
      <th> CATEGORIA </th>
      <th> MARCA </th>
      <th> CREADO</th>
      <th> ACCIONES</th>
  <thead>
  <tbody>
      @foreach($products as $m)
        <tr>
          <td>{{ $m->id }}</td>
          <td>{{ $m->name }}</td>
          <td>{{ $m->description }}</td>
          <td>{{ $m->category->type }}</td>
          <td>{{ $m->mark->name }}</td>
          <td>{{ $m->created_at }}</th>
          <td><a href="product/edit/{{ $m->id }}">edit</a></td>
          <td>
            {!! Form::open(array('route' => array('product.del', $m->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
