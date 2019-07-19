<?php
// mkdir("../_assets/image/testing");

$oldmask = umask(0);

$index = "999";
mkdir("../log/image-test" . $index, 0777);

umask($oldmask);
