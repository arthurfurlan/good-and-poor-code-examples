<a href="/fibonacci/">fibonacci "home"</a><br/>
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
for ($i=0; $i<FIBONACCI_COUNT; $i++)
  print "${i}: " . fibonacci_poor($i) . "\n";
?>

</pre>
<br />
<small><em>
  source code available at
  <a href="https://github.com/arthurfurlan/good-and-poor-code-examples/blob/master/fibonacci/fibonacci-poor.php">
    https://github.com/arthurfurlan/good-and-poor-code-examples/blob/master/fibonacci/fibonacci-poor.php</a>
</em></small>
