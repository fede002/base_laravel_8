@if ($message = Session::get('flash_message'))
<?php
//App\Helpers\miPrint::dd($message,"mensaje	");
//exit;
?>
@if(is_array( $message))
<div class="alert alert-{{$message['tipo']}} alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message["msg"] }}</strong>
</div>
@else
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif
@endif
@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>
	Please check the form below for errors
</div>
@endif