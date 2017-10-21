<!DOCTYPE html>
<html>
    <body>        
        <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
        
        <section class="section">
	        <div class="container">
	        	@yield('content')
	        </div>
        </section>
        
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>