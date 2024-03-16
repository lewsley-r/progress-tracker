<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/js/uikit-icons.min.js"></script>
</head>

<body>
    <div class="uk-align-center uk-card uk-card-default uk-width-1-2@m" style="background-color: #A9CEF4; margin-top: 20vh; width: 20vw; border-radius: 5px">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="" width="400" height="400" src="img/tcb_logo.svg" alt="Avatar">
                </div>
                
            </div>
        </div>
        <div class="uk-card-body">
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Welcome {{ Auth::user()->name }}</h3>
                <a href="{{ url('/my-progress') }}" class="uk-button uk-button-text">Proceed to your dashboard</a>
            </div>
                
        </div>
    </div>


</body>

</html>