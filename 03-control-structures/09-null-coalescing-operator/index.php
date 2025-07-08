<?php
$favoriteColor = 'red';
$secondFavoriteColor = 'blue';
$color = $favoriteColor ?? $secondFavoriteColor ??'blue';

echo $color;