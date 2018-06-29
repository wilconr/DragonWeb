<script>
	$('.btn-alert').on('click', function (e) {
		
		e.preventDefault();

		swal({
				title: 'Esta seguro que desea eliminar la {{$schedule->clase}} ?',
				text: 'Al eliminarlo no podra recuperarlo!',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'Si, Eliminarlo!',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar'
            }).then((isConfirm) =>{
            	
                	if (isConfirm) 
                	{
                		document.getElementById('deleteForm').submit();
                	}
                }

            );
                  
	});
</script>