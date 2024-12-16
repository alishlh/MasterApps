@extends('layout.master-admin')

@section('content')


    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100 py-3">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile ">
                                <h1>Biodata</h1>
                                <div class="user-avatar shadow rounded-circle">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <p class="user-name mt-5">{{$user->name}}</p>
                                <p class="user-email">{{ $user->email }}</p>
                            </div>
                            <div class="text-center">
                                <h5>About</h5>
                                <p>I'm Al. Full Stack Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, numquam rerum consectetur dolores eos placeat minus .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body mt-5">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 mt-5 text-primary">Your Data</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Username</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" readonly enabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" readonly enabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$user->alamat}}" readonly enabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="telp">No Telp</label>
                                    <input type="number" class="form-control" id="telp" name="telp" value="{{$user->telp}}" readonly enabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$user->tgl_lahir}}" readonly enabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{$user->jabatan->jabatan}}" readonly enabled>

                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" value="{{$user->status}}" readonly enabled>
                                </div>
                            </div>
                            
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            margin: 0;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-top: 130px;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin:  1rem 1rem 0;
            width: 200px;
            height: 200px;
        }

        .account-settings .user-profile .user-avatar img {
            width: 180px;
            height: 180px;
            margin-top: 10px;
            border-radius: 100px;
        }

       

      
       

       
    </style>

    @endsection