<h1> CREAR NUEVO PRODUCTO</h1>

<a href="/product"> Volver </a>
<br>
{{ Form::open(['url' => 'product/store', 'method' => 'post']) }}
<!--<form method="post" action="/product/store">-->
  <!--{{ csrf_field() }}-->
  {{ Form::token() }}
  <table border=1>
    <tr>
      <td>NOMBRE </td>
      <td>{{ Form::text('name','',['placeholder'=>'Ingresar Nombre'])}}</td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td>{{ Form::text('description','',['placeholder'=>'Ingresar Descripcion'])}}</td>
    </tr>
    <tr>
      <td>MARCA </td>
      <td>
       {{ Form::select('mark_id',$marks) }}
      </td>
    </tr>
    <tr>
      <td>CATEGORIA</td>
      <td>
         {{ Form::select('category_id',$categories) }}
      </td>
    </tr>
    <tr>
      <td><input type="submit" value="Crear"></td>
    </tr>
  </table>
</form>
{{ Form::close() }}
