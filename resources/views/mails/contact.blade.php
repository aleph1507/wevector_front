<div style="border-top:5vh solid lightblue; border-bottom:5vh solid lightblue; padding:10vh">
  <em><b>New mail from:</b> {{$form['address']}}</em>
  <div style="text-align:center; margin-top:5vh;">
    {{$form['name']}} from {{$form['city']}} {{ $form['country'] != null ? ', ' . $form['country'] : ''}} sent the following message:
  </div>
  <div style="padding-left:20vh; padding-right:20vh; margin-top:5vh; margin-bottom:5vh; text-align:left;">
    {{$form['c-form-message']}}
  </div>
  <div style="text-align:right; padding-right: 25vh; margin-top: 5vh; margin-bottom: 5vh;">
    {{$form['name']}}<br>
    {{$form['address']}}<br>
    {{$form['phone'] != null ? $form['phone'] : ''}}
  </div>
</div>
