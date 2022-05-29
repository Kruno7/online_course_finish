<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" style="width:60%; border: 1px solid; margin-top:10px">
    
        <div class="row">
            <div class="col-md-12">
                <h2>Course</h2>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Course Name </th>
                        <th scope="col"> Course Level </th>
                        <th scope="col"> Price</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $user_course->course->name }}</td>
                    <td>{{ $user_course->course->level }}</td>
                    <td>{{ $user_course->course->price }}</td>
                </tr>
                </tbody>
                </table>    
            </div>
            <hr>
            <div class="col-md-12">
                <h2>Billing Address</h2>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Zip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ Auth::user()->first_name }}</td>
                        <td>{{ Auth::user()->last_name }}</td>
                        <td>{{ Auth::user()->email }}</td>
                        <td>{{ $user_course->address }}</td>
                        <td>{{ $user_course->city }}</td>
                        <td>{{ $user_course->zip }}</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-12">
                <h2>Payment</h2>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name on Card</th>
                        <th scope="col">Credit card number</th>
                        <th scope="col">Exp Month</th>
                        <th scope="col">Exp Year</th>
                        <th scope="col">CVV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user_course->name_card }}</td>
                            <td>{{ $user_course->number_card }}</td>
                            <td>{{ $user_course->exp_month }}</td>
                            <td>{{ $user_course->exp_year }}</td>
                            <td>{{ $user_course->cvv }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin:10px">
            <div class="col-md-10"><a href="{{ route('user.course.invoice') }}" class="btn btn-primary">Download</a></div>
            <div class="col-md-2"><a href="{{ route('user.profile') }}" class="btn btn-info">View Profile</a></div>
        </div>
    </div>

</body>
</html>