<html>
    <head>
        <style>
            .errpr {color: #FF0000;}
            </style>
            </head>

            <body>
                <?php
                //define variables and set to empty values
                $namaErr = $emailErr = $genderErr = $website= "";
                $nama = $email = $gender = $comment = $website = "";

                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if (empty($_POST["nama"])){
                        $namaErr = "Nama harus diisi";
                    }else {
                        $nama = test_input($_POST["nama"]);
                    }
                    if (empty($_POST["email"])){
                        $emailErr = "Email harus diisi";
                    }else {
                        $email = test_input($_POST["email"]);

                        //check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $emailErr = "Email tidak sesuai format";
                        }
                    }
                    if (empty($_POST["website"])){
                        $website = "";
                    }else{
                        $website = test_input($_POST["website"]);
                    }
                    if (empty($_POST["comment"])){
                        $comment = "";
                    }else{
                        $comment = test_input($_POST["comment"]);
                    }

                    if (empty($__POST["gender"])){
                        $genderErr = "Pilih Gender";
                    }else{
                        $gender = test_input($_POST["gender"]);
                    }
                }

                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <h2>Posting Komentar</h2>

                <p><span class = "error">"Harus Diisi"</span></p>

                <form method = "post" action = "<?php
                echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <tabel>
                    <tr>
                        <td>Nama :</td>
                        <td><input type = "text" name = "nama">
                        <span class = "error">*<?php echo $namaErr;?></span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>E-mail :</td>
                        <td><input type = "text" name = "email">
                        <span class = "error">*<?php echo $emailErr;?></span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Website :</td>
                        <td><input type = "text" name = "website">
                        <span class = "error"><?php echo $website;?></span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Komentar :</td>
                        <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender :</td>
                        <td>
                            <input type = "radio" name = "gender" values ="L">Laki-Laki
                            <input type = "radio" name = "gender" values ="P">Perempuan
                        <span class = "error">*<?php echo $genderErr;?></span>
                        </td>
                    </tr>
                    <br><br>

                    <td>
                        <input type = "submit" name = "submit" value = "submit">
                    </td>

            </table>
            </form>

            <?php
            echo"<h2>Data yang anda isi:</h2>";
            
            echo "Nama : ";
            echo $nama;
            echo "<br>";

            echo "Email : ";
            echo $email;
            echo "<br>";

            echo "Website : ";
            echo $website;
            echo "<br>";

            echo "Komentar : ";
            echo $comment;
            echo "<br>";

            echo "Gender : ";
            echo $gender;
            ?>

            </body>
            </html>