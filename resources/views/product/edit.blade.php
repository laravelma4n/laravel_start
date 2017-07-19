<h1> EDITAR PRODUCTO</h1>

<a href="/product"> Volver </a>
<br>

<!--<form method="post" action="/product/update">-->
  {{ Form::model($product, ['url' => ['product/update', $product->id]]) }}
  <!--{{ csrf_field() }}-->
  {{ Form::token() }}
  <!--<input name="_method" type="hidden" value="PUT">-->
  <table border=1>
    <!--<tr>
      <td>ID </td>
      <td><input type="text" name="id" value="{{ $product->id }}"></td>
    </tr>-->
    <tr>
      <td>NOMBRE </td>
      <td><input type="text" name="name" value="{{ $product->name }}"></td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td><input type="text" name="description" value="{{ $product->description }}"></td>
    </tr>
    <tr>
      <td>MARCA </td>
      <td>
          {{ Form::select('mark_id',$marks,$product->mark_id) }}
      </td>

    </tr>
    <tr>
      <td>CATEGORIA</td>
      <td>
        {{ Form::select('category_id',$categories,$product->category_id) }}
      </td>

    </tr>
    <tr>
      <td><input type="submit" value="Crear"></td>
    </tr>
  </table>
<!--</form>-->

{{ Form::close() }}
