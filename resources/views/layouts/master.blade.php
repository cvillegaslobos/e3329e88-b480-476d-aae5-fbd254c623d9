<!DOCTYPE html>
<html>
    <body>        
        <link rel="stylesheet" href="{{ secure_asset('css/bulma.css') }}">
        <section class="section">
            <div class="container">
                @yield('breadcrumb')    
            </div>
	        <div class="container">
	        	@yield('content')
	        </div>
        </section>
        
        
        <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>