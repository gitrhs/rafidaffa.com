<?php
$servername = "localhost";
$username = "rafitxzm_ppimpendataan";
$password = "HS^R$a4~J;2w>@B";
$dbname = "rafitxzm_ppim";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
eader("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $from = isset($_POST['from']) ? sanitize_input($_POST['from']) : '';
    $department = isset($_POST['department']) ? sanitize_input($_POST['department']) : '';
    
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($from)) {
        $errors[] = "Asal Kampus is required";
    }
    
    if (empty($department)) {
        $errors[] = "Department is required";
    }
    
    $photo_path = '';
    $upload_successful = false;
    
    if (empty($errors) && isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
        $max_size = 5 * 1024 * 1024;
        
        $file_name = $_FILES['photo']['name'];
        $file_size = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        if (!in_array($file_type, $allowed_types)) {
            $errors[] = "Only JPG, JPEG and PNG files are allowed";
        }
        
        if ($file_size > $max_size) {
            $errors[] = "File size must be less than 5MB";
        }
        
        if (empty($errors)) {
            $upload_dir = 'uploads/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            $new_file_name = uniqid('ppim_') . '.' . $file_ext;
            $upload_path = $upload_dir . $new_file_name;
            
            if (move_uploaded_file($file_tmp, $upload_path)) {
                $photo_path = $upload_path;
                $upload_successful = true;
            } else {
                $errors[] = "Failed to upload file";
            }
        }
    } else if ($_FILES['photo']['error'] != 4) { 
        switch ($_FILES['photo']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $errors[] = "File size exceeds the maximum limit";
                break;
            case UPLOAD_ERR_PARTIAL:
                $errors[] = "The file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $errors[] = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $errors[] = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $errors[] = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $errors[] = "File upload stopped by extension";
                break;
            default:
                $errors[] = "Unknown upload error";
                break;
        }
    } else {
        $errors[] = "Photo is required";
    }
    
    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("INSERT INTO kepengurusan (name, campus, department, photo_path, created_at) VALUES (?, ?, ?, ?, timestamp())");
            
            $stmt->bind_param("ssss", $name, $from, $department, $photo_path);
            
            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = "Data submitted successfully";
            } else {
                $errors[] = "Database error: " . $stmt->error;
            }
            
            $stmt->close();
            
        } catch (Exception $e) {
            if ($upload_successful && file_exists($photo_path)) {
                unlink($photo_path);
            }
            
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
    
    if (!empty($errors)) {
        $response['errors'] = $errors;
        $response['message'] = "There were errors with your submission";
        
        if ($upload_successful && file_exists($photo_path)) {
            unlink($photo_path);
        }
    }
    
} else {
    $response['message'] = "Invalid request method";
}

header('Content-Type: application/json');
echo json_encode($response);

if (isset($conn)) {
    $conn->close();
}
?>