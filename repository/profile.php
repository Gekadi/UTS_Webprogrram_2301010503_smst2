<?php


function findProfileByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        id, 
        nama, 
        jenis_kelamin,
        tanggal_lahir,
        instagram
    FROM `profile`
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function findProfile($db)
{
    $sql = "SELECT * FROM profile " ;

    $result =  mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        return $data;
        } else {
        // jika query kosong, kembalikan array kosong
        return array();
    }
}

function updateProfileByID($db, $id, $data)
{
    // Escape input data to prevent SQL injection
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $instagram = $data['instagram'];

    // Construct the SQL query
    $sql = "UPDATE profile SET 
            nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            tanggal_lahir = '$tanggal_lahir',
            instagram = '$instagram',
            updated_at = NOW()
            WHERE id = $id";

    // Execute the SQL query
    if (mysqli_query($db, $sql)) {
        return $id; // Return the ID of the updated profile
    } else {
        // Handle the case when the query fails
        return null;
    }
}


function createProfile($db, $data)
{
    $nama =  $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $instagram = $data['instagram'];

    $sql = "INSERT INTO profile  (
        nama,
        jenis_kelamin,
        tanggal_lahir,
        instagram
    ) VALUES (
        '$nama',
        '$jenis_kelamin',
        '$tanggal_lahir',
        '$instagram'
    )";

    $test = mysqli_query($db, $sql);

    if ($test) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }
}
