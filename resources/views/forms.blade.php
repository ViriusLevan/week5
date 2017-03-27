<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="post"> 
					{{ csrf_field() }} 
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{$nama}}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" @if(isset($nama)) value="{{$email}}" @endif>
					</div>
					<div class="form-group">
						<div class="radio">
							<label><input type="radio" name="gender" value="m" @if(isset($gender) && $gender=="m") checked @endif>Laki-laki</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="gender" value="f" @if(isset($gender) && $gender=="f") checked @endif>Perempuan</label>
						</div>
					</div>
					<div class="form-group">
						 <div class="checkbox">
  							<label><input type="checkbox" name="weapon[]" value="Durandal" @if(isset($weapon) && in_array('Durandal',$weapon)) checked @endif>Durandal</label>
						</div>
						<div class="checkbox">
  							<label><input type="checkbox" name="weapon[]" value="Excalibur" @if(isset($weapon) && in_array('Excalibur',$weapon)) checked @endif>Excalibur</label>
						</div>
						<div class="checkbox">
  							<label><input type="checkbox" name="weapon[]" value="Zweihander" @if(isset($weapon) && in_array('Zweihander',$weapon)) checked @endif>Zweihander</label>
						</div>
						<div class="checkbox">
  							<label><input type="checkbox" name="weapon[]" value="Moonlight Greatsword" @if(isset($weapon) && in_array('Moonlight Greatsword',$weapon)) checked @endif>Moonlight Greatsword</label>
						</div>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
				</form>
				<br>
				<br>
				@if(isset($nama))
				Halo, {{ $nama }}
				@endif
				<br>
				@if(isset($email))
				Email kamu {{ $email }}
				@endif
				<br>
				@if(isset($gender))
				Kamu Seorang 
					@if($gender == "m") 
					Laki-laki 
					@elseif($gender == "f") 
					Perempuan 
					@else 
					ga jelas
					@endif
					<br>
				@endif
				@if(isset($weapon))
					Senjata pilihan: 
					@foreach($weapon as $value)
						<br> -> {{ ucwords($value) }}
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>