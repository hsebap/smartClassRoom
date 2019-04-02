@extends('layout')

        @section('content')
            <div class="panel clearfix">
                <h2 class="float-left">Departamentos</h2>
                    <a class="btn btn-link float-right" href="{{ action('DepartamentoController@create') }}" role="button"><i class="fa fa-plus-circle"></i> Nuevo</a>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-search"></i>Criterios de búsqueda</div>

                <div class="panel-body">
                    {{ Form::open(array('action' => 'DepartamentoController@index' ,'method'=>'get', 'class'=> 'form-inline')) }}
                            <div class ="form-group">
                                {{Form::text('nombre',null,[ 'class'=>'form-control','placeholder'=>'Nombre'])}}
                            </div>
                            <div class ="form-group">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                    {{ Form::close() }}


                    {{--<form class="form-inline" url="departamentos" method="GET" >--}}
                        {{--<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="nombre" placeholder="Nombre" maxlength="100">--}}
                        {{--<button type="submit" class="btn btn-primary">Buscar</button>--}}
                    {{--</form>--}}
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">Listado de departamentos</div>
                <div class="panel-body">
                    <div class="widget-content">
                        @if (!empty($departamentos))
                            <form class="navbar-form">
                                <!-- Resultados -->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th><span>Id</span></th>
                                            <th ><span>Nombre</span></th>
                                            <th class="mincol"></th>
                                            <th class="mincol"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($departamentos as $departamento)
                                            <tr>
                                                <td>{{$departamento->id}}</td>
                                                <td>{{$departamento->nombre}}</td>
                                                <th><a href="{{action('DepartamentoController@edit', ['departamento' => $departamento ])}}" class="mincol" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a></th>
                                                <th><a  href="{{action('DepartamentoController@destroy', ['departamento' => $departamento ])}}" class="mincol" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt"></i></a></th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $departamentos->links() }}
                                </div>
                            </form>
                        @else
                            <div class="alert alert-info" role="alert">
                                No existen departamentos para la búsqueda.
                            </div>
                        @endif
                    </div>

                </div>
            </div>




            {{--</body>--}}
        @endsection
