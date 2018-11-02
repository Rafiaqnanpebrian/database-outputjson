<!DOCTYPE html>
<html>
<head>
    <title>SMK Telkom Purwokerto</title>
</head>

<body>
    <header>
        <h3>Edit Data</h3>
    </header>

    <form action="editproses.php" method="POST">

        <fieldset>

        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="username siswa" />
        </p>
        <p>
            <label for="password">Password: </label>
            <textarea name="password"></textarea>
        </p>
        <p>
            <label for="level">Level: </label>
            <label><input type="radio" name="level" value="admin"> Admin</label>
            <label><input type="radio" name="level" value="user"> User </label>
            <label><input type="radio" name="level" value="guest"> Guest </label>
        </p>
        <p>
            <label for="fullname">Fullname: </label>
            <input type="text" name="fullname" placeholder="fullname" />
        </p>
         <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>