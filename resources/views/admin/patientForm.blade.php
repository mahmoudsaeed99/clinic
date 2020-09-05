
@extends('admin.layout.admin')
@section('title')
   form
@endsection('title')
@section('content')
<div class="d-flex justify-content-center p-3">
<div class="w-50 bg-light">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6 bg-light boxStyle">
                <form name="theform" class="" action="">
                    <div class="form-group mt-3">
                        <div class="width30 floatL"><label>FullName</label></div>
                        <div class="width70 floatR"><input id="firstname" class="width100 form-control" name="firstname"
                                type="text" value="" size="20">
                        </div><br><br>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Age</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" name="age" type="text"
                                    value="" size="20"></div>
                        </div><br>
                        <div class="form-group">
                            <div class="width30 floatL"><label>mobile</label></div>
                            <div class="width70 floatR"><input class="width100 form-control" name="mobile" type="text"
                                    value="" size="20"></div>
                        </div><br>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Heart problem</label></div>
                            yes
                            <input type="radio" name="heart" value="1"></input>
                            no
                            <input type="radio"  name="heart" value="0"></input>
                        </div>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Diabetes</label></div>
                            yes
                            <input type="radio" name="diabetes" value="1"></input>
                            no
                            <input type="radio"  name="diabetes" value="0"></input>
                        </div>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Allergy</label></div>
                            yes
                            <input type="radio" name="allergy" value="1"></input>
                            no
                            <input type="radio" name="allergy" value="0"></input>
                        </div>
                        <div class="form-group">
                            <div class="width30 floatL"><label>Bleeding problem</label></div>
                            yes
                            <input type="radio" name="bledding" value="1"></input>
                            no
                            <input type="radio" name="bledding" value="0"></input>
                        </div>
                        </di><br>
                        <label for="">note</label>
                        <textarea name="note" id="note" cols="30" class="w-100" rows="10"></textarea> 
                        <div class=""><input class="btn btn-success" type="submit" value="Submit"
                                style="font-weight: bold"></div>
 
                </form>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    </div>
@endsection('content')