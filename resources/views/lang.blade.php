<!DOCTYPE html>
<html>
<head>
    <title>multi-language Website</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h5>multi-language Website <span
                            class="text-primary">hoseinbayati</span></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-6 text-right">
                            <strong>{{__('messages.select')}} </strong>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control changeLang">
                                <option value="en" {{session()->get('locale') == 'en' ? 'selected':''}}>English</option>
                                <option value="fa" {{session()->get('locale') == 'fa' ? 'selected':''}}>فارسی</option>
                                <option value="ar" {{session()->get('locale') == 'ar' ? 'selected':''}}>العربیه</option>
                            </select>
                        </div>
                    </div>
                    <h2 class="mt-4 text-center">{{ __('messages.title') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var url = "{{route('lan.change')}}";
    $('.changeLang').change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>

</body>
</html>
