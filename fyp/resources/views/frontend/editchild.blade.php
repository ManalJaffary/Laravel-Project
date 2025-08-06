<x-mainheader title="Edit Child Profile" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url({{ URL::asset('asset/img/gallery/people-bg-1.png') }});background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">Update Child Details</h2>
 </div>
</section>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ URL::asset('uploads/child.png') }}"><span class="font-weight-bold">{{ $child['firstname'] }}&nbsp;{{ $child['lastname'] }}</span><span> </span></div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Child Profile</h4>
                </div>
                <form action="{{ URL::to('/updatechild') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $child['id'] }}">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" value="{{ $child['firstname'] }}" placeholder="firstname" name="fname"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="{{ $child['lastname'] }}" placeholder="lastname" name="lname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" class="form-control" placeholder="enter dob" value="{{ $child['dob'] }}" name="dob"></div>
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="enter gender" value="{{ $child['gender'] }}" name="gender"></div>
                    <div class="col-md-12"><label class="labels">Card ID</label><input type="text" class="form-control" placeholder="enter card id" value="{{ $child['id'] }}" name="card_id" readonly></div>
                    {{-- <div class="col-md-12"><label class="labels">Status</label><input type="text" class="form-control" placeholder="enter status" value="{{ $child['status'] }}" name="status" readonly></div> --}}
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="sumbit">Update Profile</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<x-mainfooter />
