<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .form-control
    {
        max-width: 500px;
    }
  </style>

<div class="container">
    <form action="{{ URL('/insert_client/' )}}" method="get">
        <label for="">Nome do Cliente</label>
        <input class="form-control" type="text" name="cliente">
        <label for="">Pet</label>
        <input class="form-control" type="text" name="pet">
        <label for="">Cel</label>
        <input class="form-control" type="text" name="cel">
        <label for="">Idade do Pet</label>
        <input class="form-control" type="text" name="idadepet">
        <label for="">Observações</label>
        <input class="form-control" type="text" name="observacoes">
        <input type="submit" value="Inserir" class="btn btn-success">
    </form>
</div>

<div class="container">
<table  class="table table-striped">
@foreach ($clientes as $id => $item)
    <tr>
        <td>{{ $item->idCliente }}</td>
        <td>{{ $item->cliente }}</td>
        <td>{{ $item->pet }}</td>
        <td><a href="{{ URL('/delete_clients/'.$item->idCliente )}}" class="btn btn-danger">Excluir</a></td>
    </tr>
@endforeach
</table>

</div>

