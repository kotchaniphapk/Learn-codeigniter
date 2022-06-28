<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }    
}

// function insertData() {    
//     var name = $('input[name=Fname]').val();        // input  Fullname
//     var surname = $('input[name=Lname]').val();      //input  surname 
//     var nickname = $('input[name=Nname]').val();
//     var height = $('input[name=Hheight]').val();
//     console.log( name + " " + surname);       

//     $.ajax({
//         type: 'POST',                                      //post data on database
//         url:  '../schooltest/student_controller.php/insert_value',       //url  file  controller.php
//         dataType: 'json',
//         data: {
//             // action: 'insert_value',
//             name_ui: name,
//             surname_ui: surname,
//             nickname_ui: nickname,
//             height_ui: height,     
//         },
//         success:function(data) {
//             console.log('Insert success');
//         }
        
//     });
      
// }