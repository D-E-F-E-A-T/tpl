<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tidepool Labs Image Editor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-md-4 ">
            <h1>Image Editor</h1>

            <form action="handler.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Select image(s)</label>
                    <input type="file" name="images" multiple class="form-control">
                </div>

                <div class="form-group">
                    <label>Select filter(s)</label>
                    <select multiple name="filters[]" class="form-control">
                        <option value="edgedetect">EdgeDetect</option>
                        <option value="gaussianblur">Gaussian Blur</option>
                        <option value="negate">Negate</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Brightness</label>
                    <input type="number" min="0" max="100" class="form-control" name="brightness">
                </div>

                <div class="form-group">
                    <label>Contrast</label>
                    <input type="number" min="0" max="100" class="form-control" name="contrast">
                </div>

                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</body>
</html>