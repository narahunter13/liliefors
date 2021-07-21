<?php

function lomba_mapping($params)
{
    $lomba = "";

    switch ($params) {
        case 1:
            $lomba = "Liliefors";
            break;
        case 2:
            $lomba = "Penulisan";
            break;
        case 3:
            $lomba = "Fotografi";
            break;
        case 4:
            $lomba = "Desain Grafis";
            break;
        case 5:
            $lomba = "Videografi";
            break;
    }

    return $lomba;
}

function lomba_mapping2($params)
{
    $lomba = "";

    switch ($params) {
        case 1:
            $lomba = "liliefors";
            break;
        case 2:
            $lomba = "penulisan";
            break;
        case 3:
            $lomba = "fotografi";
            break;
        case 4:
            $lomba = "desain";
            break;
        case 5:
            $lomba = "videografi";
            break;
    }

    return $lomba;
}

function status_pembayaran($params, $id)
{
    if ($params == 0) {
        return "<button type='button' onclick='pass(" . $id . ")' class='btn btn-danger' data-toggle='modal' data-target='#status-bayar'>
        Belum Dibayar
      </button>";
    } else {
        return "<button type='button' class='btn btn-success'>
        Sudah Dibayar
      </button>";
    }
}

function get_error($parent, $params)
{
    if (isset($parent)) {
        return isset($parent[$params]) ? $parent[$params] : "";
    }

    return '';
}

function jenjang_mapping($jenjang)
{
    switch($jenjang) {
        case 1:
            return "Umum";
            break;
        case 2:
            return "SMA";
            break;
    }
}

function email_template($lomba, $nama, $total)
{
    $email = ``;

    return $email;
}