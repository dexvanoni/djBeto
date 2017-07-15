@extends('layouts.app')

@section('content')
  
  <div class="bs-example" data-example-id="hoverable-table">
    <table class="table table-hover" id="pesquisa">
      <thead>
        <center><tr>
          <th>ID</th>
          <th>Data de Criação</th>
          <th>Data de Edição</th>
        </tr></center>
      </thead>
      <tbody>
        @foreach ($edition as $editions)
          <tr>
            <th scope="row">{{ $editions->id }}</th>
            <td style="width: 30%" >{{ $editions->created_at }}</td>
            <td style="width: 30%" >{{ $editions->updated_at }}</td>
            <td style="width: 20%" >
              <ul class="list-inline list-small">
                <li title="Editar">
                    <a href="{{ route('editar.edit', ['editions' => $editions->id]) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  </li>
                <li>|</li>
                <li title="Excluir">
                  <form action="{{ route('editar.destroy', ['edition' => $editions->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  </form>
                </li>
              </ul>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="{{ route('editar.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
@endsection
