@extends ('layouts.main')

@section('container')
    <div class="card" style="background-color: #8CDECD">
        <img src="img\VI4.jpg" class="card-img-top rounded mx-auto d-block mt-4 mb-4" alt="..." style="max-width:25%">
        {{-- <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div> --}}
    </div>
    <div class="divider"></div>
    <div class="card">
        <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="d-flex flex-row align-content-center flex-wrap justify-content-evenly bd-highlight mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                          <img src="img/VI4.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="d-flex flex-row align-content-center flex-wrap justify-content-evenly bd-highlight mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="d-flex flex-row align-content-center flex-wrap justify-content-evenly bd-highlight mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="d-flex flex-row align-content-center flex-wrap justify-content-evenly bd-highlight mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/VI4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection