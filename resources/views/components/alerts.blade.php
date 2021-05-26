<?php
$color = null;
$icon = null;

if ($message = session('error') ?: session('danger')) {
    $color = 'red';
    $icon = 'x-circle';
} elseif ($message = session('success') ?: session('status')) {
    $color = 'green';
    $icon = 'check-circle';
} elseif ($message = session('warning')) {
    $color = 'yellow';
    $icon = 'exclamation';
} elseif ($message = session('info')) {
    $color = 'blue';
    $icon = 'information-circle';
}
?>

@if(!empty($message))
    <x-alert :color="$color" :icon="$icon">{{$message}}</x-alert>
@endif
