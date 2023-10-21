<!DOCTYPE html>
<html>

<head>
    <title>PDF to Image Conversion</title>
</head>

<body>
    <h1>Convert PDF to Images</h1>
    <form action="{{ route('convertToImage') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf_file">
        <button type="submit">Convert</button>
    </form>
</body>

</html>