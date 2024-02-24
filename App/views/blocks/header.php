<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="/loaihang">Danh mục</a></li>
                <li><a href="/admin">Hàng hóa</a></li>
            </ul>
        </div>

        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>