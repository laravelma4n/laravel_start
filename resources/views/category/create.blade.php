<h1> CREAR NUEVA CATEGORIA </h1>

<a href="/category"> Volver </a>
<br>
{{ Form::open(['url' => 'category/store', 'method' => 'post']) }}
<!--<form method="post" action="/category/store">-->
  <!--{{ csrf_field() }}-->
  {{ Form::token() }}
  <table border=1>
    <tr>
      <td>{{ Form::label('type', 'TIPO') }} </td>
      <td>{{ Form::text('type','',['placeholder'=>'Ingresar Tipo'])}}</td>
    </tr>
    <tr>
      <td>{{ Form::submit('Crear') }}</td>
    </tr>
  </table>
<!--</form>-->

{{ Form::close() }}
