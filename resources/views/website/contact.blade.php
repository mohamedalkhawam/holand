@extends('layout.website')
@section('content')
    <!--  Main start -->
        <main>
            <!-- Contact -->
            <div class="container">
                <div class="row contact_row">
                    <!-- Get in Touch -->
                    <div class="row contact_row_title">
                        <h1>Get in Touch</h1>
                        <div class="contact_row_soc">
                        	<a href="#"><i class="fa fa-facebook"></i></a>
                        	<a href="#"><i class="fa fa-twitter"></i></a>
                        	<a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-yelp"></i></a>
                        </div>
                    </div>
                    <!-- Get in Touch -->
                    
                    <!-- Leave a Reply -->
                
                 
            {{  app()->setLocale(app('lang'))}}
             {{__('main.hey')}}
                    <h4>Leave a Reply</h4>
                    <p>Reach us with your questions. We are looking forward hearing form you!</p>
                    <div class="row form_row">
                        <div class="row message_row">
                            <div class="leable">Message</div>
                            <textarea class="posText" name="posText"></textarea>
                        </div>
                        <div class="row row-15">
                            <div class="col-3">
                                <div class="leable">Full Name</div>
                                <input class="posName" type="text" name="posName">
                            </div>
                            <div class="col-3">
                                <div class="leable">Email</div>
                                <input class="posEmail" type="email" name="posEmail" />
                            </div>
                            <div class="col-3">
                                <div class="leable">Phone (ex. 650 123-4000)</div>
                                <input class="posTel" type="text" name="posTel">
                            </div>
                        </div> 
                    </div>
                    <!-- Leave a Reply -->
                    
                    <!-- Send button -->
                    <div class="contact_process"></div>
                    <div class="center">
                       	<button type="button" class="button contact_send">Send a Message</button>  
                    </div> 
                    <!-- Send button -->
                    
                    <!-- Open Hours -->
                    <div class="row open_hours_contact">
                        <h4>Open Hours</h4>
                        <div class="row open_hours_row">
                            <div class="col-3 open_hours_l">
                                <div class="day">Monday-Friday</div>
                                <div class="row open_hours_block">
                                    <div class="hours">
                                        10:00
                                        <span>am</span>
                                    </div>
                                    <div class="minute">
                                           - 6:00
                                        <span>pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 open_hours_c">
                                <div class="day">Saturday</div>
                                <div class="row open_hours_block">
                                    <div class="hours">
                                        11:00
                                        <span>am</span>
                                    </div>
                                    <div class="minute">
                                           - 4:00
                                        <span>pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 open_hours_r">
                                <div class="day">Sunday</div>
                                <div class="row open_hours_block">
                                     By appointment
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Open Hours --> 
                </div>
            </div>
            <!-- Contact --> 
        </main>
@endsection