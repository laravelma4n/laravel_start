<h1> CREAR NUEVA MARCA</h1>

<a href="/mark"> Volver </a>
<br>

<form method="post" action="/mark/store">
  {{ csrf_field() }}
  <table border=1>
    <tr>
      <td>NOMBRE </td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Crear"></td>
    </tr>
  </table>
</form>
