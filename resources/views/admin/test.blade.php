<html>
<head>
	<title></title>
</head>

<body>
	
	i am here at laast...

	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="firstname" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="lastname" placeholder="Password">
  </div>
  <button type="submit" id="submit" class="btn btn-default">Submit</button>
</form>

 <button type="submit" id="submit1" class="btn btn-default">Submit</button>
<div id="ajaxResponse"></div>

<meta name="_token" content="{{ csrf_token() }}" />
<script src="{{ URL::to('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {

		$('#submit').click(function(event) {
			/* Act on the event */
			//alert(1);


		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        event.preventDefault();

			$.ajax({
				url: '/admin/test',
				type: 'POST',
				data: {firstname: $('#firstname').val(), 
						lastname: $('#lastname').val()
					},
				dataType: 'json',
				success: function(data){
					$('#ajaxResponse').append('<div>'+data.firstname+'</div>');
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});



		$('#submit1').click(function(event) {
			/* Act on the event */
			$.get('/admin/tests', {id: $('#firstname').val()}, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
		if(textStatus == 'success'){
			$('#ajaxResponse').append('<div>'+data.lastname+'</div>');
		}	
			});
		});
		
	});
</script>
</body>
</html>