<footer>
    <div class="footer">
        <div class="cs_footer">
            <h3>Categories</h3>
            <ul>
                <li><a href="{{asset('category', ['category' => 'hats']) }}">Hats</a></li>
                <li><a href="{{asset('category', ['category' => 'dress']) }}">Dress</a></li>
                <li><a href="{{asset('category', ['category' => 'clothes']) }}">Clothes</a></li>
                <li><a href="{{asset('category', ['category' => 'footwear']) }}">Footwear</a></li>
                <li><a href="{{asset('category', ['category' => 'jewelry']) }}">Jewelry</a></li>
            </ul>
        </div>

        <div class="cs_footer">
            <div class="sb_footer">
                <h3>Subscribe to our Newsletter</h3>
                <input type="text" name="search" placeholder="Email">
                <button>Submit</button>
            </div>

            <div class="sb_footer">
                <h3>Connect with us on Social Media</h3>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>

        <div class="na_footer">
            <h3>Navigation</h3>
            <ul>
                <li><a href="{{asset('faqs') }}">FAQs</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="{{asset('aboutus') }}">About Us</a></li>
                <li><a href="{{asset('contact') }}">Contact Us</a></li>
                <li><a href="{{asset('help') }}">Help with Navigation</a></li>
            </ul>
        </div>

        <div class="bot_footer">
            <ul>
                <li><a href="{{asset('cookie.policy') }}">Cookie Policy</a></li>
                <li><a href="{{ asset('cookie.settings') }}">Cookie Settings</a></li>
                <li><a href="{{ asset('copyright') }}">Copyright Linux Shop, LLC, all rights reserved</a></li>
                <li><a href="{{ asset('terms') }}">Terms</a></li>
                <li><a href="{{ asset('privacy') }}">Privacy</a></li>
                <li><a href="{{ asset('security') }}">Security</a></li>
            </ul>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15337.17302058118!2d108.24962609999999!3d16.05026505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1705272273720!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</footer>