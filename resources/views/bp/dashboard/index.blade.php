@extends("layouts.master")


@section('content')
<div class="container-fluid">
    <div class="col-12">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h2 class="card-title"><i class="fa fa-users"></i>  La liste des Clients</h2>
                <a href="{{url("clients/create")}}" class="float-right"><i class="fa fa-plus"></i> Ajouter un Client</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Societe</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Site Web </th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->societe}}</td>
                            <td>{{$client->telephone}}</td>
                            <td>{{$client->adresse}}</td>
                            <td>{{$client->site_web}}</td>

                            <td>
                                <form action="{{url('clients/' . $client->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{url('clients/' . $client->id . '/edit')}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i>Edit</a>
                                    <button type="submit" Class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Supprimer</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection

