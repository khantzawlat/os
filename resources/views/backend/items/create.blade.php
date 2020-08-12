@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Create Form</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
	<div class="offset-md-2 col-md-8">
	<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Codeno</label>
			<input type="text" name="codeno" class="form-control">

		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">

		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">

		</div>

		
		<div >
			
				<div class="form-group">
					price
					<input type="text" name="price" class="form-control">
				</div>
			
				<div class="form-group">
					discount
					<input type="text" name="discount" class="form-control">
				</div>
			</div>

		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea  class="form-control" name="description">

			</textarea>
		</div>
		<div class="form-group">
			<label>Brand</label>
			<select name="brand" class="form-control">
				@foreach($brands as $brand)
				<option value="{{$brand->id}}">{{$brand->name}}</option>

				
                @endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Sub Category</label>
			<select name="subcategory" class="form-control">
				@foreach($sucategories as $subcategory)
				<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
				@endforeach
				

			</select>
		</div>
		<input type="submit"  value="+ " name="" class="btn btn-outline-primary d-block">

	</form>
    </div>
</div>
@endsection