<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'/Users/Mail/mail'], $data, function($message) {
         $message->to('kansaradeep1820@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('kansaradeep1820@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('/Users/Mail/mail', $data, function($message) {
         $message->to('kansaradeep1820@gmail.com', 'Deep Kansara')->subject
            ('Laravel HTML Testing Mail');
         $message->from('kansaradeep1820@gmail.com','Team Servaxo');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('/Users/Mail/mail'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('kansaradeep1820@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('kansaradeep1820@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
   public function show()
   {
   	return view('/Users/Mail/mail');
   }
}
