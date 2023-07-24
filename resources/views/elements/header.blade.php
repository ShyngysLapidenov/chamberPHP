<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="/assets/images/bcoc_logo.png"></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST']): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/about'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/about">About us</a>
                </li>
				<li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/member'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/member">Membership</a>
                </li>
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/business'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/business">Business in KZ</a>
                </li>
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/services'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/sponsor'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/sponsor">Become a Sponsor</a>
                </li>
                <li class="nav-item<?php if(request()->url() == 'http://'.$_SERVER['HTTP_HOST'].'/event'): ?> active<?php endif; ?>">
                    <a class="nav-link" href="/event#card0">Events & Media</a>
                </li>
                <li class="nav-item">
                    <img class="nav-icon" id="mail-icon" src="/assets/images/mail-nav-icon.png" width="65%" height="70%" onclick="viewPopUp()">
                </li>
                <li class="nav-item">
                    <img class="nav-icon" id="phone-icon" src="/assets/images/phone-nav-icon.png" width="50%" height="60%" href="#">
                </li>
            </ul>
        </div>
    </nav>
