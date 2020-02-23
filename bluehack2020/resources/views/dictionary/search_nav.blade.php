@extends('layouts.app')

@section('content')

<div style="background:url('{{ asset('/img/bg/ph.jpg') }}');background-size:cover;background-attachment:fixed"><br><br><br>

   
    <div class="row">
        <div class="col-sm-6">
            <div style="background:blue;"  class="container-fluid">
                <div>
                    <div class="row">
                        <div class="col-sm-12" style="text-align:center;color:white;"><h3>Dictionary</h3></div><br>
                        <div class="col-sm-2">
                              </div>
                        <div class="col-sm-8">
                            <select style="height:30px;width:45%;" name="dialect" id="">
                                <option value="all">All</option>
                                <option value="bicolano">Bicolano</option>
                                <option value="bisaya">bisaya</option>
                                <option value="cebuano">cebuano</option>
                                <option value="hilagaynon">hilagaynon</option>
                                <option value="ilocano">ilocano</option>
                                <option value="tagalog">tagalog</option>
                                <option value="tausug">tausug</option>
                                <option value="waray">Waray</option>
                            </select>
                            <input style="width:45%;height:30px;" type="text" value="tulog"></div>
                        <div class="col-sm-2"></div>
                      
                        <div class="col-sm-6"></div>
                
                        
                        <a href="{{ route('dictionaryresult') }}"><button class="btn btn-success" type="submit">Submit</button></a>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-sm-6">
            @include('dictionary.map')</div>
    </div>
</div>
<br>



@endsection