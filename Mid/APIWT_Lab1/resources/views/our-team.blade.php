@extends('layouts.app')

@section('content')
   <section class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Team Section</h2>
                        <p>Bootstrap, a CSS framework, we can use it for our clients, customers, testimonials, and any types of the section where we want to describe our people who are working with us</p>
                    </div>
                </div>
                <hr class="mb-5 mt-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <img src="images/user-img-2.jpg" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-detail">
                                    <h4>SM-Pavel</h4>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <img src="images/user-img-3.jpg" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-detail">
                                    <h4>member-2</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <img src="images/user-img-4.jpg" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-detail">
                                    <h4>Member-3</h4>
                                    <span>IOS Developer</span>
                                </div>>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <img src="images/user-img-1.jpg" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-detail">
                                    <h4>Member-4</h4>
                                    <span>Angular Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-5">
            </div>
        </section>
@endsection

<script type="text/javascript">
    document.title='Our Team'
</script>