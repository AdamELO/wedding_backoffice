@extends('templates.dashboard')
@section('content')
    <div class="text-center">
        <h1 class="pink-text mb-2">Inscription Mail</h1>
        @foreach ($contacts as $contact)
        <a class="btn-floating sunny-morning-gradient text-white" href='mail/{{$contact->id}}/edit'>
            <i class="fas fa-edit text-white"></i>
        </a>
        @endforeach
    </div>
    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #0b90e8; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
        <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
        <td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
        <a style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #ff2ef4; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 #a97c7c; display: inline-block;">
        TheRealWedding
        </a>
        </td>
        </tr>
        
        <!-- Email Body -->
        <tr>
        <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; border-bottom: 1px solid #f6f6f7; border-top: 1px solid #f6f6f7; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
        <!-- Body content -->
        <tr>
        <td class="content-cell" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
        <h2 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 16px; font-weight: bold; margin-top: 0; text-align: left;">{{$contacts[0]->title}}</h2>
        <h3 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 14px; font-weight: bold; margin-top: 0; text-align: left;">Bonjour {{Auth::user()->name}},</h3>
        <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">{{$contacts[0]->text}}</p>
        <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
        <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <tr>
        <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <tr>
        <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <a href="http://localhost:8000" class="button button-primary" target="_blank" rel="noopener" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #ffffff; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #6bbfee; border-top: 10px solid #6bbfee; border-right: 18px solid #6bbfee; border-bottom: 10px solid #6bbfee; border-left: 18px solid #6bbfee;"><span style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">{{$contacts[0]->textbtn}}</span></a>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Merci,<br>
        TheRealWedding
        <br></p>
        
        
        
        </td>
        </tr>
        </table>
        </td>
        </tr>
        
        <tr>
        <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
        <tr>
        <td class="content-cell" align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
        <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #040303; font-size: 12px; text-align: center;">© 2020 TheRealWedding. All rights reserved.</p>
        
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
@endsection