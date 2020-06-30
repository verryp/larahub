<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar HTML | Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>

    <!-- ! Pathnya silahkan sesuaikan -->
    <form action="{{ route('welcome') }}" method="get">
        <h3>Sign Up Form</h3>

        <div>
            <label for="first_name">First name:</label><br>
            <input id="first_name" type="text" name="first_name" placeholder="First name">
        </div>

        <br>

        <div>
            <label for="last_name">Last name:</label><br>
            <input id="last_name" type="text" name="last_name" placeholder="Last name">
        </div>

        <br>

        <div>
            <label for="gender">Gender:</label>
            <br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </div>

        <br>

        <div>
            <label for="nationality">Nationality:</label>
            <br>
            <select name="nationality" id="nationality">
                <option value="indonesian">indonesian</option>
                <option value="javanese">javanese</option>
                <option value="korean">korean</option>
            </select>
        </div>

        <br>

        <div>
            <label for="language">Language Spoken: </label>
            <br>
            <input type="checkbox" id="indonesia" name="language" value="indonesia">
            <label for="indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" id="English" name="language" value="English">
            <label for="English">English</label><br>
            <input type="checkbox" id="other" name="language" value="other">
            <label for="other">Other</label>
        </div>

        <br>

        <div>
            <label for="bio">Bio: </label><br>
            <textarea name="bio" id="bio" cols="30" rows="5"></textarea>
        </div>

        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>