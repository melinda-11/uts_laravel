@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Tambah Data Artikel
						</div>
						<div class="card-body">
							<form action="{{url('Artikel')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label">Judul</label>
									<input type="text" class="form-control" name="judul">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Deskripsi</label>
									<textarea name="deskripsi" class="form-control"></textarea>
								</div>
								<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
							</form>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection