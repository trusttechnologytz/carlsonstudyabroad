
<style>
    .buttoncontactForm {
        background-color: #ff0000; 
        color: #ffffff;
        width: 80px;
        height: 40px;
        transition: opacity 0.3s ease; 
        font-weight: normal; /* Set font weight to normal to remove bold */
    }

    .buttoncontactForm:hover {
        opacity: 0.8;
    }
</style>

     <section class="contact-section">
            <div class="container">
                
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" wire:submit.prevent="Emailsend"  action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Messege" wire:model="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" wire:model="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" wire:model="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" wire:model="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="buttoncontactForm boxed-bt ">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Dar es Salaam</h3>
                                <p>P.O.Box 60594 </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+255 676 002 598</h3>
                                <h3>+255 786 280 639</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@carlinternational.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                        <a style="padding-left:40px;color:red"href="https://maps.app.goo.gl/h7zrzpHJcNi9Qcxs8">Click to navigate</a>
                    </div>
                </div>
            </div>
        </section>