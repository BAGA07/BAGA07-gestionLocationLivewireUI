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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
                <div class="card-tools">
                    <div
                        class="input-group input-group-sm"
                        style="width: 150px"
                    >
                        <input
                            type="text"
                            name="table_search"
                            class="form-control float-right"
                            placeholder="Search"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-success">Approved</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-warning">Pending</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-primary">Approved</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-danger">Denied</span></td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>134</td>
                            <td>Jim Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-success">Approved</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>494</td>
                            <td>Victoria Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-warning">Pending</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>832</td>
                            <td>Michael Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="tag tag-primary">Approved</span>
                            </td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                        <tr>
                            <td>982</td>
                            <td>Rocky Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-danger">Denied</span></td>
                            <td>
                                Bacon ipsum dolor sit amet salami venison
                                chicken flank fatback doner.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
@endsection