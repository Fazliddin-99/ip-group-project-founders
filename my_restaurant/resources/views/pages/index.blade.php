@extends('layouts.app')

@section('content')
	@if(isset($reservation))
		<h1 style="margin-top: 100px">Hello, {{ $reservation->name}}. Your reservation was accepted!</h1>
	@endif
    <div class="jumbotron text-center">
    	<h1>Welcome To Restaurant!</h1>
    	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem beatae iste eum laboriosam, illo dolorum ea reiciendis, provident, voluptas vero facilis illum optio quae. Hic voluptatibus, iste provident voluptas laboriosam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste est aspernatur asperiores cum laboriosam doloribus illo eos pariatur, ipsum vero autem voluptates, cumque debitis perferendis, possimus velit. Vitae, corrupti, aspernatur. </p>
    </div>         
@endsection