<?php
$message = null;
$color = null;
$icon = null;

if ($message = session('error')) {
    $color = 'red';
    $icon = 'x-circle';
} elseif ($message = session('danger')) {
    $color = 'red';
    $icon = 'x-circle';
} elseif ($message = session('success')) {
    $color = 'green';
    $icon = 'check-circle';
} elseif ($message = session('status')) {
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

@if($message)
   <x-alert :color="$color" :icon="$icon">{{$message}}</x-alert>
@endif
