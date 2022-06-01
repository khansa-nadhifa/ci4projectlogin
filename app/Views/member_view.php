<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                Halaman Member
            </div>
            <div class="card-body">
                <h1>Halo, <?php echo session()->get('member_username') ?></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit soluta cum voluptate, eos quia.</p>
                <a href="<?php echo site_url('member/logout') ?>" class="btn btn-primary">LOGOUT</a>
            </div>
        </div>
    </div>
</body>
</html>