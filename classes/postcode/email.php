<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of email
 *
 * @author Chris
 */
class PostcodesEmail {

    public static function send($subtitle, $text) {
        $email = "admin@ramblers-webs.org.uk";
        $headers = "From: admin@ramblers-webs.org.uk\r\n";
        $headers .= "Content-type: text/html\r\n";
        $title = "[Postcodes] " . $subtitle;
        $mailed = mail($email, $title, $text, $headers);
    }

}