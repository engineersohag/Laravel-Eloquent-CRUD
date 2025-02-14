<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Resource Controller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-5">
                <form action="" method="" class="card p-3 shadow">
                    @csrf
                    <h2 class="text-center">Add New Users</h2>
                    <div class="mb-2 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control">
                    </div>

                    <input type="submit" value="SUBMIT" class="btn btn-primary mt-4">
                </form>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>