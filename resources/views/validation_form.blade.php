<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>customValidation Form</h2>
  <form method="POST" action="{{ route('validation.add_customer') }}">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="email">First Name</label>
      <input type="text" class="form-control" id="email" placeholder="First Name" name="first_name">
      @if ($errors->has('first_name'))
                                   <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Middle Name</label>
      <input type="text" class="form-control" id="mn" placeholder="Middle Name" name="middle_name">
      @if ($errors->has('middle_name'))
                                   <div class="text-danger">{{ $errors->first('middle_name') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Last Name</label>
      <input type="text" class="form-control" id="ln" placeholder="Last name" name="last_name">
      @if ($errors->has('last_name'))
                                   <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Special Character:</label>
      <input type="text" class="form-control" id="spcl" placeholder="Special Character" name="Special_character">
      @if ($errors->has('Special_character'))
                                   <div class="text-danger">{{ $errors->first('Special_character') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="email" class="form-control" id="eail" placeholder="Email" name="email">
      @if ($errors->has('email'))
                                   <div class="text-danger">{{ $errors->first('email') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
      @if ($errors->has('phone'))
                                   <div class="text-danger">{{ $errors->first('phone') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Common Password:</label>
      <input type="password" class="form-control" id="cp" placeholder="Common Password:" name="common_password">
      @if ($errors->has('common_password'))
                                   <div class="text-danger">{{ $errors->first('common_password') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Number password</label>
      <input type="password" class="form-control" id="np" placeholder="Number password" name="number_password">
      @if ($errors->has('number_password'))
                                   <div class="text-danger">{{ $errors->first('number_password') }}</div>
                                  @endif
    </div>
    <div class="form-group">
      <label for="pwd">Special Character password</label>
      <input type="password" class="form-control" id="scp" placeholder="Special Character password" name="Special_character_password">
      @if ($errors->has('Special_character_password'))
                                   <div class="text-danger">{{ $errors->first('Special_character_password') }}</div>
                                  @endif
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>