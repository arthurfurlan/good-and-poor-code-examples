<?php
/**
 * vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4
 *
 * Copyright (C) 2022 Arthur Furlan <afurlan@afurlan.org>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * On Debian systems, you can find the full text of the license in
 * /usr/share/common-licenses/GPL-2
 */

define('FIBONACCI_COUNT', 50);

// common version of fibonacci using simple recurrence
function fibonacci_poor($n) {
  if ($n == 0 OR $n == 1)
    return $n;
  return fibonacci_poor($n-1) + fibonacci_poor($n-2);
}

// better version of fibonacci using recurrence based on saved history
$fibonacci_history = array(0 => 0, 1 => 1);
function fibonacci_good($n) {
  global $fibonacci_history;

  if (!array_key_exists($n, $fibonacci_history))
    $fibonacci_history[$n] = fibonacci_good($n-1) + fibonacci_good($n-2);

  return $fibonacci_history[$n];
}
?>
