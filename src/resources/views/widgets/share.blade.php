<div class="blog-share">
    <h4>{{ __('static.share_it_on') }}:</h4>
    <ul>
        <li>
            <a class="footer-socials" target="_blank" href="{{ $facebookLink }}"
               onclick="return share(this.href)">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li>
            <a class="footer-socials" target="_blank" href="{{ $twitterLink }}"
               onclick="return share(this.href)">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript">
    function share(url) {
        window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
        return false;
    }
</script>
