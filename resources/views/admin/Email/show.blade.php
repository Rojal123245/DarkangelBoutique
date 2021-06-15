<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email!</title>
</head>

<body id="index" class="home">
<h1>{{$details['title']}}</h1>
<h1>{{$details['body']}}</h1>
</body>
</html> -->

<style type="text/css">
  body,
  html, 
  .body {
    background: #f3f3f3 !important;
  }
</style>
<!-- move the above styles into your custom stylesheet -->

<spacer size="16"></spacer>

<container>

  <spacer size="16"></spacer>

  

  <row>
    <columns>
      <h1>{{$details['title']}}</h1>
      <p>{{$details['body']}} </p>
      <spacer size="16"></spacer>

      <callout class="secondary">
        <row>
          <columns large="6">
           
           
          </columns>
          <columns large="6">
           
          </columns>
        </row>
      </callout>

     

      <hr/>

      
    </columns>
  </row>
  <row class="footer text-center">
    
    <columns large="3">
      <p>
        Call us at 9841824221<br/>
        Email us at darkangel@darkangel.shop
      </p>
    </columns>
    <columns large="3">
      <p>
        Imadol,Lalitpur<br/>
        
      </p>
    </columns>
  </row>
</container>