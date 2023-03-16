

<div>   
    @if ($isbtnClicked)
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>

            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            id="exampleInputEmail1"
                            placeholder="Enter email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="Password"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input
                                    type="file"
                                    class="custom-file-input"
                                    id="exampleInputFile"
                                />
                                <label
                                    class="custom-file-label"
                                    for="exampleInputFile"
                                    >Choose file</label
                                >
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="exampleCheck1"
                        />
                        <label class="form-check-label" for="exampleCheck1"
                            >Check me out</label
                        >
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Different Styles</h3>
            </div>

            <div class="card-body">
                <h4>Input</h4>
                <div class="form-group">
                    <label for="exampleInputBorder"
                        >Bottom Border only
                        <code>.form-control-border</code></label
                    >
                    <input
                        type="text"
                        class="form-control form-control-border"
                        id="exampleInputBorder"
                        placeholder=".form-control-border"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2"
                        >Bottom Border only 2px Border
                        <code>.form-control-border.border-width-2</code></label
                    >
                    <input
                        type="text"
                        class="form-control form-control-border border-width-2"
                        id="exampleInputBorderWidth2"
                        placeholder=".form-control-border.border-width-2"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleInputRounded0"
                        >Flat <code>.rounded-0</code></label
                    >
                    <input
                        type="text"
                        class="form-control rounded-0"
                        id="exampleInputRounded0"
                        placeholder=".rounded-0"
                    />
                </div>
                <h4>Custom Select</h4>
                <div class="form-group">
                    <label for="exampleSelectBorder"
                        >Bottom Border only
                        <code>.form-control-border</code></label
                    >
                    <select
                        class="custom-select form-control-border"
                        id="exampleSelectBorder"
                    >
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorderWidth2"
                        >Bottom Border only
                        <code>.form-control-border.border-width-2</code></label
                    >
                    <select
                        class="custom-select form-control-border border-width-2"
                        id="exampleSelectBorderWidth2"
                    >
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0"
                        >Flat <code>.rounded-0</code></label
                    >
                    <select
                        class="custom-select rounded-0"
                        id="exampleSelectRounded0"
                    >
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                    />
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" />
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" />
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <h4>With icons</h4>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"
                            ><i class="fas fa-envelope"></i
                        ></span>
                    </div>
                    <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                    />
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" />
                    <div class="input-group-append">
                        <span class="input-group-text"
                            ><i class="fas fa-check"></i
                        ></span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-ambulance"></i>
                        </div>
                    </div>
                </div>
                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" />
                                </span>
                            </div>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                    ><input type="radio"
                                /></span>
                            </div>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>

                <h5 class="mt-4 mb-2">With buttons</h5>
                <p>Large: <code>.input-group.input-group-lg</code></p>
                <div class="input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <button
                            type="button"
                            class="btn btn-warning dropdown-toggle"
                            data-toggle="dropdown"
                        >
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="#">Action</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">Another action</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">Something else here</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>

                    <input type="text" class="form-control" />
                </div>

                <p>Normal</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-danger">
                            Action
                        </button>
                    </div>

                    <input type="text" class="form-control" />
                </div>

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" />
                    <span class="input-group-append">
                        <button type="button" class="btn btn-info btn-flat">
                            Go!
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>

            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"
                            >Email</label
                        >
                        <div class="col-sm-10">
                            <input
                                type="email"
                                class="form-control"
                                id="inputEmail3"
                                placeholder="Email"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-2 col-form-label"
                            >Password</label
                        >
                        <div class="col-sm-10">
                            <input
                                type="password"
                                class="form-control"
                                id="inputPassword3"
                                placeholder="Password"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="exampleCheck2"
                                />
                                <label
                                    class="form-check-label"
                                    for="exampleCheck2"
                                    >Remember me</label
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    @else
 
    <div class="row p-4 pt-5">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header bg-gradient-primary d-flex align-items-center"
                >
                    <h3 class="card-title flex-grow-1">
                        <i class="fas fa-users fa-2x"></i> Liste des
                        utilisateurs
                    </h3>

                    <div class="card-tools d-flex align-items-center ">
                <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()" on ><i class="fas fa-user-plus"></i> Nouvel utilisateur</a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
                </div>

                <div
                    class="card-body table-responsive p-0"
                    style="height: 300px"
                >
                    <table
                        class="table table-head-fixed text-nowrap table-striped"
                    >
                        <thead>
                            <tr>
                                <th style="width: 5%"></th>
                                <th style="width: 25%">Utilisateurs</th>
                                <th style="width: 20%">Roles</th>
                                <th style="width: 20%" class="text-center">
                                    Ajoté
                                </th>
                                <th style="width: 30%" class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td>
                                    @if ($user->sexe == "0")
                                    <img
                                        src="{{ asset('images/woman.png') }}"
                                        width="24"
                                    />
                                    @else
                                    <img
                                        src="{{ asset('images/man.png') }}"
                                        width="24"
                                    />
                                    @endif
                                </td>
                                <td>{{$user->prenom}} {{$user->nom}}</td>
                                <td>{{ $user->all_role_names}}</td>
                                <td class="text-center">
                                    <span
                                        class="tag tag-warning"
                                        >{{$user->created_at->diffForHumans()}}</span
                                    >
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-link">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button class="btn btn-link">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

    <!-- /.content -->
</div>