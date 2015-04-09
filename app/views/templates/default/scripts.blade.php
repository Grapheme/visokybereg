@if(Config::get('app.use_scripts_local'))
	{{HTML::script('private/js/vendor/jquery.min.js');}}
@else
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{asset('private/js/vendor/jquery.min.js');}}"><\/script>')</script>
@endif
	{{HTML::script('private/js/system/main.js');}}
	{{HTML::script('private/js/vendor/SmartNotification.min.js');}}
	{{HTML::script('private/js/vendor/jquery.validate.min.js');}}
	{{HTML::script('private/js/system/app.js');}}
	<script type="text/javascript">
		if(typeof runFormValidation === 'function'){
			loadScript("{{asset('private/js/vendor/jquery-form.min.js');}}",runFormValidation);
		}else{
			loadScript("{{asset('private/js/vendor/jquery-form.min.js');}}");
		}
	</script>