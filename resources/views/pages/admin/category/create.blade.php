@extends('layouts.admin')

@section('title')
    Category
@endsection

@section('container')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title pt-3">Category</h2>
        <p class="dashboard-subtitle">
            Create New Category
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
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col md-12">
                              <div class="form-group mt-2">
                                <label>Nama Kategori</label>
                                <input type="text" name="name" class="form-control" required>
                              </div>
                              <div class="form-group mt-2">
                                <label>Foto</label>
                                <input type="file" name="photo" class="form-control" required>
                              </div>
                              <div class="form-group mt-2">
                                <label>Deskripsi Post</label>
                                <textarea name="description" id="editor"></textarea>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
@endpush