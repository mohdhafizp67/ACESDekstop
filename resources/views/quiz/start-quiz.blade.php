@extends('layouts.app-student')

@section('content')



<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #9966ff !important;">

            <div style="padding: 5px;"></div>
              <h2 class="card-header" style="text-align: center;"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>Mula menjawab kuiz</h2>
              <div class="card-body p-0">
                <div style="padding: 10px;"></div>

                <div class="pills-regular">
                    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="home" aria-selected="true">Tab#1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="profile" aria-selected="false">Tab#2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="contact" aria-selected="false">Tab#3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>Phasellus non ante gravida, ultricies neque a, fermentum leo. Etiam ornare enim arcu, at venenatis odio mollis quis. Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum. In hac habitasse platea dictumst. Pellentesque sed justo aliquet, posuere sem nec, elementum ante. Vestibulum dui tortor, consectetur quis sagittis vitae, dapibus ut magna. Cras ante dui, tincidunt et turpis vel, suscipit viverra eros. Ut auctor augue feugiat hendrerit feugiat.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>

@endsection
