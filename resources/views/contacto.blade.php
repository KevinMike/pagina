	@extends('master')
	@section('contenido')
        <div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
                <h2 >Envianos un mensaje y te responderemos en breve</h2>
        </div>
        <br>
		{!! Form::open(['url' => '/send','method'=>'post','class'=>"form-horizontal", 'role'=>"form" ]) !!}
			<div class="form-group">
				{!! Form::label('email','Correro Electrónico',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::email('email',null,['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('subject','Asunto',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('subject',null, ['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('body','Mensaje',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::textarea('body',null, ['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
				</div>
			</div>
		{!! Form::close() !!}





        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enhorabuena!!!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Su mensaje ha sido enviado, le responderemos en breve.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Siguiente</button>
                    </div>
                </div>

            </div>
        </div>

        @if($status)

        <script>
        $("#myModal").on("show", function() { // wire up the OK button to dismiss the modal when shown
            $("#myModal a.btn").on("click", function(e) {
                console.log("button pressed"); // just as an example...
            $("#myModal").modal('hide'); // dismiss the dialog
            });
        });
        $("#myModal").on("hide", function() { // remove the event listeners when the dialog is dismissed
            $("#myModal a.btn").off("click");
        });
        $("#myModal").on("hidden", function() { // remove the actual elements from the DOM when fully hidden
            $("#myModal").remove();
        });
        $("#myModal").modal({ // wire up the actual modal functionality and show the dialog
            "backdrop" : "static",
            "keyboard" : true,
            "show" : true // ensure the modal is shown immediately
        });
        </script>
        @endif
	@endsection