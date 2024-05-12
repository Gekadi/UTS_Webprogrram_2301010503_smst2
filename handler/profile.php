<?php

function index($db)
{
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = findProfile($db);
    // dd($r);

    masterView('profile/index', ['items' => $r]);
}

function tambah($db)
{
    require BASE_PROJECT_PATH . "/repository/profile.php";
    // $r = findProfileByID($db, 1);

    masterView('profile/tambah', ['profile' => $r]);
}

function create($db)
{
    $data = $_POST;
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = createProfile($db, $data);

    masterView('profile/tambah', ['profile' => $r]);
}

function ubah($db)
{
    // Check if the 'id' parameter exists in the URL
    if (isset($_GET['id'])) {
        // Sanitize the 'id' parameter to ensure it contains only digits
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        // Validate the 'id' parameter to ensure it's a valid integer
        if (filter_var($id, FILTER_VALIDATE_INT)) {
            // The 'id' parameter is valid and sanitized, you can use it safely
            require BASE_PROJECT_PATH . "/repository/profile.php";
            $r = findProfileByID($db, $id);
            // dd($r);

            masterView('profile/ubah', ['items' => $r]);
        } else {
            // Handle the case when 'id' parameter is not a valid integer
            echo "Invalid ID";
        }
    } else {
        // Handle the case when 'id' parameter is not provided in the URL
        echo "ID parameter is missing";
    }
}

function update($db)
{
    $data = $_POST;
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = updateProfileByID($db, $data['id'], $data);

    header("Location: /profile/ubah?id=".$data['id']);
    exit;
}

function delete($db)
{
    // Check if the 'id' parameter exists in the URL
    if (isset($_GET['id'])) {
        // Sanitize the 'id' parameter to ensure it contains only digits
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        // Validate the 'id' parameter to ensure it's a valid integer
        if (filter_var($id, FILTER_VALIDATE_INT)) {
            // Escape the ID to prevent SQL injection
            $id = mysqli_real_escape_string($db, $id);

            // Construct the SQL query
            $sql = "DELETE FROM profile WHERE id = $id";

            // Execute the SQL query
            if (mysqli_query($db, $sql)) {
                header("Location: /profile");
                exit;
            } else {
                // Handle the case when the query fails
                return false;
            }
        } else {
            // Handle the case when 'id' parameter is not a valid integer
            echo "Invalid ID";
        }
    } else {
        // Handle the case when 'id' parameter is not provided in the URL
        echo "ID parameter is missing";
    }
}