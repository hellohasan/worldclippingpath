@if($errors->any())
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-warning">
                            <h6><strong>Whoops!</strong> There were some problems with your input. <br></h6>
                            <ul class=list-group>
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item" style="color: red"><i class="icon fas fa-exclamation-triangle"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {{--@foreach ($errors->all() as $error)
                    <div class="col-sm-12">
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h6><i class="icon fas fa-exclamation-triangle"></i> {!!  $error !!}</h6>
                        </div>
                    </div>
                @endforeach--}}
            </div>
        </div>
    </section>
@endif
