
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-info icon-gradient bg-sunny-morning">
                                        </i>
                                    </div>
                                    <div>Halaman Info Virtual Account
                                        <div class="page-title-subheading">Halaman ini berisikan informasi virtual account yang telah terdaftar.
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>     -->
                                </div>
                        </div>            <div class="row">
                            <div class="col-lg-12">
                            @include('pesan')
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Info Virtual Account Yang Aktif</h5>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Virutal Account</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Teller</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>
                                            <tbody>
<!--
                                            @foreach($va as $key => $vas)
                                            <tr>
                                                <th scope="row">{{ ++$key }}</th>
                                                <td>{{$vas->va}}</td>
                                                <td>{{$vas->nama}}</td>
                                                <td><div class="mb-2 mr-2 badge badge-pill badge-info">Pending</div></td>
                                                <td>{{$vas->user->name}}</td>
                                                <td><button class="mb-2 mr-2 btn btn-success" data-toggle="modal" data-target=".bd-example-modal-sm-iquiry-{{ $vas->id }}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Iquiry
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-info" data-toggle="modal" data-target="#exampleModalLongDetail-{{ $vas->id }}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use address-card"></i> Detail
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-alternate" data-toggle="modal" data-target="#exampleModalLongEdit-{{ $vas->id }}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Edit
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{ $vas->id }}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Delete
                                                    </button>||&nbsp;
                                                    <button class="mb-2 mr-2 btn btn-focus" data-toggle="modal" data-target="#exampleModalLongHistory-{{ $vas->id }}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use history"></i> History
                                                    </button></td>
                                            </tr>
                                            @endforeach -->

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>











