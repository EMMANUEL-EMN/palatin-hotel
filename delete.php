<?php
if (unlink('./profile/'.'bar3.jpg')) {
    echo "deleted";

}else {
    echo "not deleted";
}

?>