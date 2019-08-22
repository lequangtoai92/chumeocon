<?php

function checkAuthor($id){
    if ( Auth::user()->id == $id ) {
        return true;
    } else {
        return false;
    }
}
