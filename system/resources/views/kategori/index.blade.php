@extends ('template.base')

@section ('content')

<div class="Container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				
				<div class="card-header">
					Data Kategori
					<a href="{{url('admin/kategori/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Dekripsi</th>
						</thead> 
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection