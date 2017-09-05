<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use Mail;

class MessagesController extends Controller{

	public function submit( Request $request ){
		$this->validate( $request, [
			'name' => 'required',
			'email' => 'required'
		] );
		//create message
		$db_message = new Message;
		$db_message->name = $request->input( 'name' );
		$db_message->email = $request->input( 'email' );
		$db_message->message = $request->input( 'message' );
		//save message
		$db_message->save();
		//email
		Mail::raw( $db_message->message, function($message){
			$message->from( 'mario@gmail.com', 'Mario Carrizales' );
			$message->to("pcdoctormario@gmail.com");
		} );
		/*
		  require $_SERVER['DOCUMENT_ROOT'] . '/laravel-sites/laravel-sample-site/vendor/sendgrid/sendgrid/sendgrid-php.php';
		  // If you are not using Composer
		  // require("path/to/sendgrid-php/sendgrid-php.php");
		  $from = new SendGrid\Email( $message->name, "mario@gmail.com" );
		  $subject = "Message from " . $message->name . " with SendGrid.com";
		  $to = new SendGrid\Email( "Recipient", $message->email );
		  $content = new SendGrid\Content( "text/plain", $message->message );
		  $mail = new SendGrid\Mail( $from, $subject, $to, $content );
		  $apiKey = getenv( 'SENDGRID_API_KEY' );
		  $sg = new \SendGrid( $apiKey );
		  $response = $sg->client->mail()->send()->post( $mail );
		  //echo $response->statusCode();
		  //print_r( $response->headers() );
		  //echo $response->body();
		 * 
		 */
		return redirect( '/contact' )->with( 'success', 'Message Sent!' );
	}

	public function getMessages(){
		//gets all messages
		$messages = Message::all();
		return view( 'messages' )->with( 'messages', $messages );
	}

}
