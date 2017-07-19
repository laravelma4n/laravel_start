<h1> CREAR NUEVA CATEGORIA </h1>

<a href="/category"> Volver </a>
<br>

<form method="post" action="/category/update">
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PUT">
  <table border=1>
    <tr>
      <td>ID </td>
      <td><input type="text" name="id" value="{{ $category->id }}"></td>
    </tr>
    <tr>
      <td>TIPO </td>
      <td><input type="text" name="type" value="{{ $category->type }}"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Actualizar"></td>
    </tr>
  </table>
</form>
