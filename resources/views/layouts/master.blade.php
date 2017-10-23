<!DOCTYPE html>
<html>
    <body>        
        <link rel="stylesheet" href="{{ secure_asset('css/bulma.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <section class="section">
	        <div class="container">
	            <div class="level">
                    @yield('top')    
                </div>
	        	@yield('content')
	        </div>
        </section>
        
        
        <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>