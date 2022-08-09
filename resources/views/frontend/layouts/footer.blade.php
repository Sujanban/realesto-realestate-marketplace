<footer class="footer">
        <div class="footer_main">
            <div class="footer_info">
                <H2>Realesto</H2>
                <p>Sundarharaincha-5 Morang, Nepal 56705</p>
                <p>Admin@realesto.com</p>
                <a href="tel-phone"><i class="fa fa-phone"></i> (+977) 9824386853</a>
            </div>
            <div class="footer_link">
                <h2>Links</h2>
                <div class="link_column">
                    <div>
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{url('/buy')}}">Buy</a>
                        <a href="{{url('/sell')}}">Sell</a>
                    </div>
                    <div>
                        <a href="{{url('/about')}}">About Us</a>
                        <a href="{{url('/contact')}}">Contact Us</a>
                        <a href="{{url('/policy')}}">Privacy Policy</a>
                        <a href="{{url('/terms')}}">Terms and Conditions</a>
                    </div>
                </div>
            </div>
            <div class="footer_newsletter">
                <h2>Subcribe to Our Newsletter</h2>
                <label for="email">
                    <input type="email" name="email" class="email"
                        placeholder="Enter your e-mail"><i><button type="submit">Subscribe</button></i>
                </label>
                <div>
                    <input type="checkbox" name="checkbox" class="term"> I have read and agree to the <a
                        href="{{url('/policy')}}">Privacy Policy</a>
                </div>
            </div>
        </div>
        <div class="footer_secondary">
            <p>Realesto &copy 2022. All right reserved.</p>
            <p></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i><i class="fa fa-linkedin"></i></p>
        </div>
    </footer>
<!-- -----------------------------------------footer section ends here---------------------------------- -->
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
	<script src="{{url('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{url('frontend/js/script.js')}}" defer></script>
</body>

</html>