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
    <div class="uk-align-center uk-card uk-card-default uk-width-1-2@m" style="margin-top: 20vh; width: 20vw">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="" width="400" height="400" src="img/engineered.svg" alt="Avatar">
                </div>
                <!-- <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">Log In</h3>
                </div> -->
            </div>
        </div>
        <div class="uk-card-body">
                <form class="uk-align-center">

                    <div class="uk-margin">
                        <div class="uk-inline">
                            <a class="uk-form-icon" href="#" uk-icon="icon: users"></a>
                            <input class="uk-input" type="text" aria-label="Clickable icon">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-inline">
                            <a class="uk-form-icon" href="#" uk-icon="icon: lock"></a>
                            <input class="uk-input" type="password" aria-label="Clickable icon">
                        </div>
                    </div>

                </form>
        </div>
        <div class="uk-card-footer">
            <a href="#" class="uk-button uk-button-text">Submit</a>
        </div>
    </div>


</body>

</html>