<?php
include "namespace.php";

$student = new Html\Students();
$student->name = "Urmi";
$student->marks =76;


?>

<html>
<body>

<?php $student->sInfo(); ?>

</body>
</html>

                  