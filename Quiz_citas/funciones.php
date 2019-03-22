<?php

function filtrar($f1, $f2, $doctor, $pasiente){
    require_once __DIR__ . '/db.php';
    $citas = '';
    $sql = 'SELECT * FROM citas';
    if (empty($f1) && empty($f2) && empty($doctor) && empty($pasiente)) {
        $citas = $con->runQuery($sql);
    }else if(!empty($f1) && empty($f2) && empty($doctor) && empty($pasiente)){
        $sql .= ' WHERE (fecha <= $1)';
        $citas = $con->runQuery($sql, [$f1]);
    }else if(empty($f1) && !empty($f2) && empty($doctor) && empty($pasiente)){
        $sql .= ' WHERE (fecha >= $1)';
        $citas = $con->runQuery($sql, [$f2]);
    }else if(!empty($f1) && !empty($f2) && empty($doctor) && empty($pasiente)){
        $sql .= ' WHERE (fecha >= $1) and (fecha <= $2)';
        $citas = $con->runQuery($sql, [$f1, $f2]);
    }else if(!empty($f1) && !empty($f2) && !empty($doctor) && empty($pasiente)){
        $sql .= ' WHERE (fecha >= $1) and (fecha <= $2) and (doctor like $3)';
        $citas = $con->runQuery($sql, [$f1, $f2, '%'.$doctor.'%']);
    }else if(!empty($f1) && !empty($f2) && empty($doctor) && !empty($pasiente)){
        $sql .= ' WHERE (fecha >= $1) and (fecha <= $2) and (pasiente like $3)';
        $citas = $con->runQuery($sql, [$f1, $f2, '%'.$pasiente.'%']);
    }else if(!empty($f1) && !empty($f2) && !empty($doctor) && !empty($pasiente)){
        $sql .= ' WHERE (fecha >= $1) and (fecha <= $2) and (doctor like $3) and (pasiente like $4)';
        $citas = $con->runQuery($sql, [$f1, $f2, '%'.$doctor.'%', '%'.$pasiente.'%']);
    }
    return $citas;
}   