@extends('layouts.admin')

@section('title')
    User
@endsection

@section('container')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title pt-3">User</h2> Edit User
        <p class="dashboard-subtitle badge bg-success">
          "{{ $item->name }}"
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                          <div class="row">
                            <div class="col md-12">
                              <div class="form-group mt-3">
                                <label>Nama User</label>
                                <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                              </div>
                              <div class="form-group mt-3">
                                <label>Email User</label>
                                <input type="email" name="email" class="form-control" required value="{{ $item->email }}">
                              </div>
                              <div class="form-group mt-3">
                                <label>Password User</label>
                                <input type="password" name="password" class="form-control">
                                <small>Kosongkan jika tidak ingin mengganti password</small>
                              </div>
                              <div class="form-group mt-3">
                                <label>Roles</label>
                                <select name="roles" required class="form-control">
                                  <option value="{{ $item->roles }}" selected>Tidak diganti</option>
                                  <option value="ADMIN">Admin</option>
                                  <option value="USER">User</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col text-right">
                              <button type="submit" class="btn btn-success mt-3 px-5">
                                Save Now</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
