@extends('theme/'.$theme.'/layout')
@section('contenido')
@include('admin.tipousuarios.create')
<!--------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Tipo de Usuarios</h3>
                @include('admin.tipousuarios.search')
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIPO</th>
                            <th>ACTIVO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipousuarios as $tipo)
                        <tr>
                            <td>{{$tipo->id}}</td>
                            <td>{{$tipo->tipo}}</td>
                            <td>
                                @if (($tipo->activo)=='1')
                                <span class="badge bg-green">{{'ACTIVADO'}}</span>
                                @else
                                <span class="badge bg-red">{{'DESACTIVADO'}}</span>
                                @endif
                            </td>
                            <td style="width: 138px">
                                <a href="{{URL::action('admin\tipousuarioController@show',$tipo->id)}}"><button
                                        class="btn btn-success"><i class="fa fa-arrow-circle-down"></i></button></a>
                                <a href="{{URL::action('admin\tipousuarioController@edit',$tipo->id)}}"><button
                                        class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                <a href="" data-target="#modal-delete-{{$tipo->id}}" data-toggle="modal"><button
                                        class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        @include('admin.tipousuarios.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection