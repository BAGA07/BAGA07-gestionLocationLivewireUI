<div>
   @extends('layouts.master') @section('contenu') {{--
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __("Users") }}</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
--}}
<!-- /.content-header -->

<!-- Main content -->
{{-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info">Sample table page</div>

                <div class="card">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        {{--   {{ $users->links() }} --}}
                    {{-- </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-gradient-primary d-flex align-items-center">
            <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des utilisateurs</h3>

            <div class="card-tools d-flex align-items-center ">
            <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i> Nouvel utilisateur</a>
                <div class="input-group input-group-md" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width:5%;"></th>
                            <th style="width:25%;">Utilisateurs</th>
                            <th style="width:20%;">Roles</th>
                            <th style="width:20%;" class="text-center">Ajoté</th>
                            <th style="width:30%;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user )
                        <tr>
                            <td>{{$user->sexe}}</td>
                            <td>{{$user->prenom}} {{$user->nom}}</td>
                            <td>11-7-2014</td>
                            <td class="text-center">
                                <span class="tag tag-warning">{{$user->created_at->diffForHumans()}}</span>
                            </td>
                            <td class="text-center">
                               <button class="btn btn-link"><i class="far fa-edit"></i></button>
                               <button class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>     
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
@endsection
</div>


