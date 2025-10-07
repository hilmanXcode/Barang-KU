<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


function getMonthName($dateString){

    $timestamp = strtotime($dateString);

    $date = date('F', $timestamp);

    switch($date){
        
        case 'January':
            return "Januari";
        break;

        case 'February':
            return "Februari";
        break;

        case 'March':
            return "Maret";
        break;

        case 'May':
            return "Mei";
        break;

        case 'June':
            return "Juni";
        break;

        case 'July':
            return "Juli";
        break;
        
        case 'August':
            return "Agustus";
        break;
        
        case 'October':
            return "Oktober";
        break;
    
        case 'December':
            return "Desember";
        break;
    
    }
}

function getDateName($dateString) {

    $timestamp = strtotime($dateString);
    $dayName = date('l', $timestamp);

    switch($dayName){
        
        case 'Sunday':
            return "Minggu";
        break;

        case 'Monday':
            return "Senin";
        break;
        
        case 'Tuesday':
            return "Selasa";
        break;
        
        case 'Wednesday':
            return "Rabu";
        break;

        case 'Thursday':
            return "Kamis";
        break;

        case 'Friday':
            return "Jum'at";
        break;

        case 'Saturday':
            return "Sabtu";
        break;

        default: 
            return "Tidak diketahui";
        break;

    }
}
