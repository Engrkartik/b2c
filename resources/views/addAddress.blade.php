@extends('layouts.addAddressLayout')
@section('content')

<style>
    .register-form spn {
        padding-left: 0px;
    }

    #addaddress {
        display: none;
    }

    #button {
        float: right;
    }

</style>

<div class="page-content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <!-- User Meta Data-->
            <div class="col-12" style="text-align: left;">
                <br>
                <div class="edit-profile-btn">
                    <a class="btn" href="#editAddress" style="background-color: white;" onclick="myFunction()">ADD
                        ADDRESS</a>
                </div>
                <!-- <form action="updateProfile" method="post"> -->
                <p>Default Address</p>

                @foreach($defaultaddress as $key=>$dvalue)
                <div class="profile-wrapper-area pb-1" id="1stBox">

                    <div class="card bg-white">

                        <div class="card-body d-flex align-items-center">

                            <div class="row" style="width: 100%;">
                                <div class="col-10">
                                    <div class="user-info">
                                        <p class="mb-0"><strong style="color: #00A79D;">{{$dvalue->name}}</strong>
                                        </p>
                                        <br>
                                        <p>Mobile: <strong
                                                style="color: #00A79D;">{{$dvalue->add_details.$dvalue->landmark}},
                                                {{ $dvalue->state }} - {{ $dvalue->pincode }}</strong></p>
                                        <!-- <div id="checkboxDefault">
                                                <input type="checkbox" name="default" id="make" onclick="onlyOne(this)">
                                                <input class="form-check-input" id="make" type="radio" name="default">
                                                <label for="make" id="defaultLabel"> Make Default</label>
                                            </div> -->
                                    </div>
                                </div>
                                <div class="col-2">
                                    <ul class="donate-now">
                                        <li>
                                            <input type="radio" id="default" name="address" />
                                            <label for="default">{{$dvalue->add_type}}</label>
                                        </li>
                                    </ul>
                                    <div id="button">
                                        <a onclick="myFunction()"><i class="lni lni-pencil"></i></a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach

                <!-- profile area div end-->
                <div class="register-form px-4 pt-4 bg-white" id="addaddress" style="height: 85%;">
                    <!--    <h5 class="mb-6">Fill your Details</h5> -->
                    <form action="save_address" method="post" id="editAddress">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="name"></label>
                                <span class="required">Name</span>

                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="form-control" name="name" type="text" required="required" value=""
                                    style="color: #00A79D; font-weight: bold;" required="required">
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="address"></label>
                                <span class="required">Address</span>

                            </div>
                            <div class="col-sm" id="rightregg">
                                <textarea class="form-control" type="text" name="address" value=""
                                    required="required"></textarea>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="landmark"></label>
                                <span>Landmark</span>

                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="form-control" name="landmark" type="text" value="">
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="state"></label>
                                <span class="required">State</span>
                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="form-control" name="state" type="text" value="">
                                <!-- <select class="form-control" name="state" value="" required="required">
                                    <option></option>
                                </select> -->
                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="city"></label>
                                <span class="required">City</span>
                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="form-control" name="city" type="text" value="">
                                <!-- <select class="form-control" name="city" value="" required="required">
                                    <option></option>
                                </select> -->
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="pin"></label>
                                <span class="required">Pin Code</span>
                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="form-control" name="pin" type="text" value="" id="pinCode" maxlength="6"
                                    minlength="6" onfocus="pinValidation()" required="required">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="mobile"></label>
                                <span class="required">Mobile</span>

                            </div>
                            <div class="col-sm" id="rightregg">
                                <input class="input-mobile form-control" id="mobile" name="mobile" type="tel" value=""
                                    maxlength="10" minlength="10" style="color: #00A79D; font-weight: bold;"
                                    required="required">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6" id="leftregg">
                                <label for="type"></label>
                                <span class="required">Add. Type</span>

                            </div>
                            <div class="col-sm" id="rightregg" style="margin-top: 13px;padding-left: 17px;"
                                required="required">
                                <input class="form-check-input" id="Home" type="radio" value="Home" name="addtype"
                                    checked>
                                <label class="form-check-label" id="type" for="Home">Home</label>
                                <input class="form-check-input" id="Office" type="radio" value="Office" name="addtype">
                                <label class="form-check-label" for="Office" id="type">Office</label>
                                <input class="form-check-input" id="other" type="radio" value="Other" name="addtype">
                                <label class="form-check-label" for="other" id="type">Other</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <div class="makeDefault">
                                    <input class="form-check-input" type="checkbox" name="default" id="default">
                                    <!-- <input class="form-check-input" id="make" type="radio" name="default"> -->
                                    <label class="form-check-label" for="make" id="defaultLabel"> Make Default</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <div class="back-button">
                                    <a><button class="btn btn-success" type="submit">Save</button></a>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                    <div class="back-button">
                    <a><button class="btn btn-danger">Cancel</button></a>
                  </div>  
                  </div>  -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- row end-->
        <br>
        <p>Saved Address</p>

        @foreach($alladdress as $key=>$value)
        <div class="profile-wrapper-area pb-3">

            <div class="card bg-white">

                <div class="card-body d-flex align-items-center">

                    <div class="row" style="width: 100%;">
                        <div class="col-10">
                            <div class="user-info">
                                <p class="mb-0"><strong style="color: #00A79D;">{{$value->name}}</strong></p>
                                <p>Mobile: <strong style="color: #00A79D;">{{$value->add_details.$value->landmark}},
                                        {{ $value->state }} - {{ $value->pincode }}</strong></p>
                                <!-- <a href="order-summary"><button class="btn btn-success">Make as default</button></a> -->
                                <a style="padding-left: 11px;" class="btn btn-success"
                                    href="defaultAddress/{{$value->id}}">Make as default</a>
                            </div>
                        </div>
                        <div class="col-2">
                            <ul class="donate-now">
                                <li>
                                    <input type="radio" id="default" name="address" />
                                    <label for="default">{{ $value->add_type }}</label>
                                </li>
                            </ul>
                            <div id="buttons">
                                <a onclick="myFunction()"><i class="lni lni-pencil"></i></a>
                                <a style="padding-left: 11px;" onclick="deleteaddress('{{$value->id}}')"><i
                                        class="lni lni-trash" style="color:red;"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>


<script>
    var pincode = document.getElementById('pinCode').value;

    function pinValidation(pincode) {
        //called when key is pressed in textbox
        $("#pinCode").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

                return false;
            }
        })
    }

    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('default')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }

    function myFunction() {
        document.getElementById("addaddress").style.display = "block";
        document.getElementById("1stBox").style.display = "none";

    }

    document.addEventListener('mouseup', function (e) {
        var container = document.getElementById('addaddress');
        if (!container.contains(e.target)) {
            container.style.display = 'none';
            document.getElementById("1stBox").style.display = "block";
        }
    });

    function deleteaddress(id) {
        // alert(id);
        $.ajax({
            type: 'POST',
            url: '{{url("/removeAddress")}}',
            data: {
                'id': id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                // alert(data);
                if (data == 'Successfully Deleted') {
                    // alert(data);
                    swal({
                        icon: 'success',
                        title: 'Successfully Removed your address!!',
                        text: data,
                    });
                    window.location.href = '{{url("/addAddress")}}';
                    // removeWishlist(id);
                } else {
                    // alert(data);
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sorry!! ' + data + ' .',
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown) { 
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    }

</script>

@stop
