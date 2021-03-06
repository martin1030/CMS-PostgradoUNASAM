@extends('theme/'.$theme.'/layout')
@section('contenido')
<!--------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Listado de documentos<a href="/admin/documentos/create">|<button class="btn btn-success"><i
                                class="fa fa-plus"></i></button></a></h3>
                @include('admin.documentos.search')
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DOCUMENTO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>LINK</th>
                            <th>ESTADO</th>
                            <th>TIPO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                        <tr>
                            <td>{{$documento->id}}</td>
                            <td>{{$documento->nom_documento}}</td>
                            <td>{{$documento->descripcion}}</td>
                            <td>{{$documento->link}}</td>
                            <td>
                                @if (($documento->activo) =='1')
                                <span class="badge bg-green">{{'ACTIVADO'}}</span>
                                @else
                                <span class="badge bg-red">{{'DESACTIVADO'}}</span>
                                @endif
                            </td>
                            <td>{{$documento->tipo}}</td>
                            <td style="width: 138px">
                                <a href="{{URL::action('admin\documentosController@show',$documento->id)}}"><button
                                        class="btn btn-success"><i class="fa fa-arrow-circle-down"></i></button></a>
                                <a href="{{URL::action('admin\documentosController@edit',$documento->id)}}"><button
                                        class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                <a href="" data-target="#modal-delete-{{$documento->id}}" data-toggle="modal"><button
                                        class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        @include('admin.documentos.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection