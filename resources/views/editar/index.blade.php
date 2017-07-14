@extends('layouts.app')

@section('content')
  @if (session('erro'))
    <div class="alert alert-danger">
      {{ session('erro') }}
    </div>
  @endif
                  <div class="bs-example" data-example-id="hoverable-table">
                <table class="table table-hover" id="pesquisa">
                  <thead>
                    <center><tr>
                      <th>ID</th>
                      <th>Data de Criação</th>
                    </tr></center>
                  </thead>
                  <tbody>
                    @foreach ($edition as $editions)
                      <tr>
                        <th scope="row">{{ $editions->id }}</th>
                        <td style="width: 20%" >{{ $editions->created_at }}</td>
                          <ul class="list-inline list-small">
                            <li title="Excluir">
                              <form action="{{ route('destroy', ['edition' => $editions->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                              </form>
                            </li>
                          </ul>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
@endsection
