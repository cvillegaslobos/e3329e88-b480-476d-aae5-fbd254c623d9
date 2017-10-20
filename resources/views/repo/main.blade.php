<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="{{ secure_asset('css/bulma.css') }}">
        
        
        <div class="container">
            
            <table class="table is-fullwidth ">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ramas</th>
                    <th>Due&ntilde;o</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $repo)
                    
                    <tr>
                        <td>
                            {{ $repo['name'] }}
                        </td>
                        <td>
                            {{ $repo['branches'] }}
                        </td>
                        <td>
                            {{ $repo['owner'] }}
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            
        </div>
        
        
        <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>