<pre>
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

include 'functions.php';

// print first elements of the fibonnaci's sequence
ob_start();
for ($i=0; $i<FIBONACCI_COUNT; $i++) {
  print "${i}: " . fibonacci_poor($i) . "\n";
  ob_flush();
  flush();
}
?>
