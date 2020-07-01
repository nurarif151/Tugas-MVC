<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan1.1</title>
</head>

<body>
    <center>
        <h1>Buat Account Baru!</h1>
    </center>
    <hr>
    <center>
        <table>
            <td>
                <h3>Sign Up Form</h3>
                <form action="">
                    <label for="fname">First name:</label><br><br>
                    <input type="text" id="fname" name="fname" value=""><br><br>
                    <label for="lname">Last name:</label><br><br>
                    <input type="text" id="lname" name="lname" value=""><br><br>
                </form>


                <p> Gender : </p>


                <form action="">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br><br>
                </form>


                <p>Nationality :</p>

                <form action="">

                    <select id="nationality" name="nationality">
                        <option value="Indonesia">Indonesia</option>
                        <option value="USA">USA</option>
                        <option value="Rusia">Rusia</option>
                        <option value="Inggris">Inggris</option>
                    </select>

                </form>

                <p>Language Spoken : </p>

                <form>
                    <input type="checkbox" id="indonesia" name="indonesia" value="">
                    <label for="indonesia"> Bahasa Inonesia</label><br>
                    <input type="checkbox" id="english" name="english" value="">
                    <label for="english"> English</label><br>
                    <input type="checkbox" id="otherr" name="otherr" value="">
                    <label for="otherr"> Other</label>
                </form>

                <p>Bio :</p>

                <form action="">

                    <textarea id="bio" name="bio" rows="4" cols="50">

      </textarea>
                    <br><br>
                    <a href="/welcome1">sign up</a>
                    <span> <a href="/index">Kembali</a></span>
                </form>
            </td>
        </table>
    </center>

</body>

</html>