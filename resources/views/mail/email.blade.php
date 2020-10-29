@component('mail::message')
# {{$contacts[0]->title}}
<h3>Bonjour {{$name}},</h3>
<p>{{$contacts[0]->text}}</p>

<a class="button button-primary" target="_blank" href="{{$token}}" 
    rel="noopener" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #ffffff; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #6bbfee; border-top: 10px solid #6bbfee; border-right: 18px solid #6bbfee; border-bottom: 10px solid #6bbfee; border-left: 18px solid #6bbfee;">
    {{$contacts[0]->textbtn}}
</a>

Merci,<br>
{{ config('app.name') }}
<br>
@endcomponent
