<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ url('../admin123') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('../admin123') }}/dist/css/css_all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="wrapper">

        @include('admin.layouts.admin.header')


        @include('admin.layouts.sidebar')

        @yield('main')


        @include('admin.layouts.admin.footer')

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script th:src="@{/assets/summernote/summernote-bs4.js}"></script>
<script th:src="@{/webjars/popper.js/umd/popper.min.js}"></script>
<script src="{{ url('../admin123') }}/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    $('#table').DataTable();
    } );
</script>

<script>
    tinymce.init({
    selector: 'textarea#default'
});
</script>
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="tel" name="phonezalo[]" class="form-control m-input" placeholder="" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Xóa</button>';
        html += '</div>';
        html += '</div>';
        $('#newRow').append(html);
    });
    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('.input-group').remove();
    });
</script>
</html>
