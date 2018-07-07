@extends('admin/app')

@section('content')
   	<div id="page-wrapper">
			<div class="main-page">
			 @if($user->id == 1)
                Admin is logged in
             @else
                User is logged in 
			 @endif
				
			</div>
		</div>
@stop