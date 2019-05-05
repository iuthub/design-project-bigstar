<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.header')
  <body>
    <!-- bootstrap jumbotron component -->
    <div class="jumbotron text-center" >
      <h1 class="wow fadeInLeft">Get more info about us</h1>

    </div>
<!-- container with aboout the author and link to the report on development process -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 wow fadeInRight" style="text-align:center">
          <h3>About the author</h3>
          <p>This website was designed by Sophomore students and was  created  to  fulfill  Internet Programming design project's  requirements  and  does  not  represent  actual  company  or  service</p>
         <a class="btn btn-primary" href="#" role="button">Download the report</a>
        </div>

      </div>
    </div>

    <!-- statistics part -->
<div class="statics">

    <p>The number of satisfied customers</p>
  <div class="block">
    <div class="skills html">90%</div>
  </div>

  <p>The number of visitors</p>
  <div class="block">
    <div class="skills css">5000</div>
  </div>

  <p>The number of posiitve feedback given</p>
  <div class="block">
    <div class="skills js">1000</div>
  </div>

  <p>Films on repertoire</p>
  <div class="block">
    <div class="skills php"> >100 </div>
  </div>
</div>




<!-- table about the staff -->
<h1>Get to know our staff</h1>
<table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Student ID</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row">1</th>
    <td>Azam</td>
    <td>Nurullaev</td>
    <td>U1710011</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Musobek</td>
    <td>Shodmonov</td>
    <td>U1710009</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Javokhir</td>
    <td>Nazarov</td>
    <td>U1710001</td>
  </tr>
  <tr>
    <th scope="row">4</th>
    <td>Ulug'bek</td>
    <td>Tulaev</td>
    <td>U1710085</td>
  </tr>
  <tr>
    <th scope="row">5</th>
    <td>Aytmukhammad</td>
    <td>Turgunov</td>
    <td>U1710292</td>
  </tr>
  <tr>
    <th scope="row">6</th>
    <td>Akhadjon</td>
    <td>Abdukhalilov</td>
    <td>U1710021</td>
  </tr>
  </tbody>
</table>








<div class="container" style="height: 400px;">
  <form method="post" action="/contact" >
    <h2>Contact Us</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">First Name</label>
          <input type="text" class="form-control" pattern="^[a-zA-Z]+$"  placeholder="First Name" id="first" name="firstName">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Last Name</label>
          <input type="text" class="form-control" pattern="^[a-zA-Z]+$" placeholder="Last Name" id="last" name="lastName">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" class="form-control" pattern="^[A-Z]([a-zA-Z0-9]|[- @\.#&!])*$" placeholder="" id="company" name="company">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control"  id="email" placeholder="email" name="email">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="url">Your Website <small>Please include http://</small></label>
          <input type="url" class="form-control" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                 id="url" placeholder="url" name="url">
        </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </body>

<!-- footer part -->

@include('layouts.footer')

<script src="{{asset("js/statistics.js")}}">

</script>
</html>
