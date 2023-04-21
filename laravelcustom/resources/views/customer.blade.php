<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
                <x-input type="text" name="name" label="Name" placeholder="enter name" />
                <x-input type="email" name="email" label="Email" placeholder="enter email" />
                <x-input type="text" name="phone" label="Phone" placeholder="enter phone" />
                <x-input type="textarea" name="address" label="Address" placeholder="enter address" />

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>