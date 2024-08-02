<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .error-container {
            display: flex;
            flex-direction: inherit;
            align-items: center;
        }

        .error-code {
            font-size: 24px;
            font-weight: 500;
            line-height: 49px;
            border-right: 1px solid rgba(0, 0, 0, .3);
            margin-right: 20px;
            padding-right: 23px;
        }

        .error-message {
            font-size: 14px;
            font-weight: 400;
            line-height: 49px;
        }

        @media (prefers-color-scheme: dark) {
            body {
                color: #fff;
                background: #000;
            }

            .error-code {
                border-right: 1px solid rgba(255, 255, 255, .3);
            }
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1 class="error-code">404</h1>
        <h2 class="error-message">Cette page n'a pas pu être trouvée.</h2>
    </div>
</body>

</html>
