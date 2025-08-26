<?php
// Your secret key (base32)
$secret = 'JBSWY3DPEHPK3PXP'; // Replace with your actual secret

// Function to decode base32
function base32_decode($b32) {
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    $b32 = strtoupper($b32);
    $l = strlen($b32);
    $n = 0;
    $j = 0;
    $binary = '';

    for ($i = 0; $i < $l; $i++) {
        $n = $n << 5; // Move buffer left by 5 to make room
        $n = $n + strpos($alphabet, $b32[$i]); // Add value into buffer
        $j = $j + 5; // Keep track of number of bits in buffer
        if ($j >= 8) { // If buffer has 8 or more bits
            $j = $j - 8; // Remove 8 bits from buffer
            $binary .= chr(($n & (0xFF << $j)) >> $j);
        }
    }
    return $binary;
}

// Function to verify TOTP code
function verify_totp($secret, $code, $discrepancy = 1, $timeSlice = null) {
    if ($timeSlice === null) {
        $timeSlice = floor(time() / 30);
    }
    $secretkey = base32_decode($secret);
    for ($i = -$discrepancy; $i <= $discrepancy; $i++) {
        $calculatedCode = generate_totp($secretkey, $timeSlice + $i);
        if ($calculatedCode == $code) {
            return true;
        }
    }
    return false;
}

function generate_totp($secretkey, $timeSlice) {
    $time = pack('N*', 0) . pack('N*', $timeSlice);
    $hash = hash_hmac('sha1', $time, $secretkey, true);
    $offset = ord(substr($hash, -1)) & 0x0F;
    $truncatedHash = substr($hash, $offset, 4);
    $value = unpack('N', $truncatedHash)[1];
    $value = $value & 0x7FFFFFFF;
    $modulo = 1000000;
    return str_pad($value % $modulo, 6, '0', STR_PAD_LEFT);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'] ?? '';
    if (verify_totp($secret, $code)) {
        // Valid code - set cookie and redirect
        setcookie('authenticated', 'true', time() + 3600, '/');
        header('Location: viewer.php');
        exit;
    } else {
        echo "Invalid authentication code.";
    }
} else {
    echo "Invalid request method.";
}
