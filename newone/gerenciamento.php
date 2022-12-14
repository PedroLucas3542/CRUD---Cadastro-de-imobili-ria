<?php
    $sql = "SELECT * FROM cadastro";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;