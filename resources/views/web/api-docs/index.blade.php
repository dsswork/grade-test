<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="SwaggerUI" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SwaggerUI</title>
    <link rel="stylesheet" href="{{ asset('docs/swagger-ui.css') }}" />
</head>
<body>
<x-site.header />
<div class="container">
    <div id="swagger-ui"></div>
</div>
<script src="{{ asset('docs/swagger-ui-bundle.js') }}" crossorigin></script>
<script>
    window.onload = () => {
        window.ui = SwaggerUIBundle({
            url: '/docs/api.json',
            dom_id: '#swagger-ui',
        });
    };
</script>
</body>
</html>
