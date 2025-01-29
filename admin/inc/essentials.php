<?php
function adminLogin() {
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        header("Location: login.php");  // Redirect to login page if not logged in
        exit;  // Always call exit after header to stop further script execution
    }
}

function redirect($url) {
    header("Location: $url");
    exit;  // Always call exit after redirect
}

function alert($type, $message) {
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    // Sanitize message to prevent XSS
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
         <strong class="me-3">$message</strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    alert;
}
?>
