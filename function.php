<?Php 
    $conn = mysqli_connect("localhost", "root", "", "tahap_tiga");


    function query ($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result )) {
            $rows [] = $row;
        }
        return $rows;
    }

    function tambah($arsip) {
        global $conn;

        $project_name = htmlspecialchars($arsip["project_name"]);
        $client = htmlspecialchars ($arsip["client"]);
        $email = htmlspecialchars($arsip["email"]) ;
        $pembuatan = htmlspecialchars($arsip["pembuatan"]) ;
        $selesai = htmlspecialchars($arsip["selesai"]) ;
        $progres = htmlspecialchars($arsip["progres"]) ;
        $cek_ricek = mysqli_query($conn, "SELECT * FROM tes_magang WHERE email = '$email'")  or die (mysqli_error($conn));
        if (mysqli_num_rows($cek_ricek) > 0 ) {
            echo " <script>
            alert ('No id sudah pernah di input'); 
            window.location.href = 'data.php';
           </script>";

        }
        $query = "INSERT INTO tes_magang
                    VALUES 
                    ('', '$project_name', '$client', '$email', '$pembuatan', '$selesai', '$progres')";
       mysqli_query($conn, $query);

       return mysqli_affected_rows($conn);


    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM tes_magang WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function edit ($arsip) {
        global $conn;
        $id = $arsip["id"];
        $project_name = htmlspecialchars($arsip["project_name"]);
        $client = htmlspecialchars ($arsip["client"]);
        $email = htmlspecialchars($arsip["email"]) ;
        $pembuatan = htmlspecialchars($arsip["pembuatan"]) ;
        $selesai = htmlspecialchars($arsip["selesai"]) ;
        $progres = htmlspecialchars($arsip["progres"]) ;

        $query = "UPDATE tes_magang SET 
                project_name = '$project_name',
                client = '$client',
                email = '$email',
                pembuatan = '$pembuatan',
                selesai = '$selesai',
                progres = '$progres'
                WHERE id = $id
                ";
                    
       mysqli_query($conn, $query);

       return mysqli_affected_rows($conn);
    }

    function cari ($keyword) {
        $search = "SELECT * FROM tes_magang 
                    WHERE
                    project_name LIKE '$keyword%' OR
                   client LIKE '$keyword%' OR
                    no_id LIKE '$keyword%' OR
                   pembuatan LIKE '$keyword%' OR
                    selesai LIKE '$keyword%' OR
                    progres LIKE '$keyword%'
                    ";
        return query($search);
    }
 
?>