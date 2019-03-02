<?php

function HandshakeCount($people) {
    if ($people==0) {

    }else{
      return ($people -1) + HandshakeCount($people-1);
    }
}

//example handshake
echo HandshakeCount(6);

?>