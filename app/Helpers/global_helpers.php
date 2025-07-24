<?php
use Carbon\Carbon;

if (!function_exists('getInitials')) {
    function getInitials($firstName, $lastName) {
        return strtoupper(substr($firstName, 0, 1) . substr($lastName, 0, 1));
    }
}

if (!function_exists('getFirstLetter')) {
    function getFirstLetter($firstName) {
        return strtolower(substr($firstName, 0, 1));
    }
}

if (!function_exists('sortDateFormate1')) {
    function sortDateFormate1($d) {
        return $d = Carbon::parse($d)->format('d M, Y');

    }
}
if (!function_exists('sortDateFormate2')) {
    function sortDateFormate2($d) {
        return $d = Carbon::parse($d)->format('d-m-Y');

    }
}

if (!function_exists('fullDateFormate1')) {
    function fullDateFormate1($d) {
        return $d = Carbon::parse($d)->format('d M, Y H:i:s');
    }
}
if (!function_exists('fullDateFormate2')) {
    function fullDateFormate2($d) {
        return $d = Carbon::parse($d)->format('d-m-Y H:i:s');
    }
}

if (!function_exists('randomOTP')) {
    function randomOTP() {
        $six_digit_random_number = random_int(101010, 999999);
        return $six_digit_random_number;
    }
}


