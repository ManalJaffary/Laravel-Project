<x-mainheader title="My Profile" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url(asset/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">My Profile</h2>
 </div>
</section>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ URL::asset('uploads/users/'.$user['profile_picture']) }}"><span class="font-weight-bold">{{ $user['firstname'] }}&nbsp;{{ $user['lastname'] }}</span><span class="text-black-50">{{ $user['email'] }}</span><span> </span></div>
            <div class="text-center"><a class="btn btn-primary profile-button" href="{{ URL::to('/mychild') }}">View Child</a></div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Details</h4>
                </div>
                <form action="{{ URL::to('/updateparent') }}" method="GET">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" value="{{ $user['firstname'] }}" placeholder="firstname" name="fname"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="{{ $user['lastname'] }}" placeholder="lastname" name="lname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value="{{ $user['email'] }}" name="email"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter password" value="{{ $user['password'] }}" name="password"></div>
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="enter gender" value="{{ $user['gender'] }}" name="gender"></div>
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ $user['phone_number'] }}" name="phone"></div>
                    <div class="col-md-12"><label class="labels">CNIC</label><input type="text" class="form-control" placeholder="enter cnic" value="{{ $user['cnic'] }}" name="cnic"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value="{{ $user['address'] }}" name="address"></div>
                    <div class="col-md-12"><label class="labels">Postal Code</label><input type="text" class="form-control" placeholder="enter postal code" value="{{ $user['postal_code'] }}" name="postal"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Area</label><input type="text" class="form-control" placeholder="area" value="{{ $user['area'] }}" name="area"></div>
                    <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" value="{{ $user['city'] }}" placeholder="city" name="city"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="sumbit">Update Profile</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<x-mainfooter />
